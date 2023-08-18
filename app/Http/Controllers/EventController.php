<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\event;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    //
    public function index()
    {
        //$events = event::orderBy('created_at', 'desc')->get();
        $events = event::all();
        return view('flc',compact('events'));
        //return view('flc', ['events' => $events]);
    }
    public function index2()
    {
        //$events = event::orderBy('created_at', 'desc')->get();
        $events = event::all();
        return view('knowmore',compact('events'));
        //return view('knowmore', ['events' => $events]);
    }
    public function index3()
    {
        //$events = event::orderBy('created_at', 'desc')->get();
        $events = event::all();
        return view('adpage',compact('events'));
        //return view('adpage', ['events' => $events]);
    }

    function storeData(Request $request)
    {
        $event = new event;
        $event->title=$request->title;
        $event->organizers=$request->organizers;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/event/',$filename);
            $event->image = $filename;
            //$imagePath = $request->file('image')->store('images', 'public');
            //$event->image = $imagePath;
        }
        $event->dateFrom=$request->dateFrom;
        $event->dateTo=$request->dateTo;
        $event->timeFrom=$request->timeFrom;
        $event->timeTo=$request->timeTo;
        $event->description=$request->description;
        $event->save();
        return redirect()->back()->with('status', 'Event created successfully!!');
        //return redirect('adpage');
    }
}
