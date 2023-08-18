<html>
    <head>
        <title>ClubConnect</title>
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    </head>
    <body>
        <x-header/>

        <main class="main">
            @foreach ($events->sortByDesc('created_at') as $event)
                <div class="card">
                    <div class="card-content">
                        <img src="{{ asset('uploads/event/' .$event->image) }}" alt="{{ $event->title }}" class="cover-image">
                        <h2 style="font-size: 24px; color: #333333;">{{ $event->title }}</h2>
                        <p style="font-size: 18px; color: #333333;">Date:{{ $event->dateFrom }}  @if($event->dateTo) to {{ $event->dateTo }} @endif</p>
                        <p style="font-size: 18px; color: #333333;">@if($event->timeFrom) Time:{{ $event->timeFrom }} @endif  @if($event->timeTo) to {{ $event->timeTo }} @endif</p>
                        <p style="font-size: 18px; color: #333333;">@if($event->organizers) Organizers:{{ $event->organizers }} @endif</p>
                        <p class="desc" style="font-size: 18px; color: #333333;">{{ $event->description }}</p>
                    </div>
                </div>
            @endforeach
        </main>
        <style>
            body {
                background: rgba(173,216,230,0.4);
                overflow-x:hidden;
                margin:0;
                padding:0;
                font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, sans-serif;
            }
            .main {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                margin-top:100px;
            }
            .card {
                width: 300px;
                margin: 10px;
                margin-top:30px;
                margin-bottom:50px;
                border: 1px solid #ccc;
                border-radius: 5px;
                padding: 10px;
                background:rgba(3, 138, 255,0.2);
            }
            .card:hover{
      transform:scale(1.1);
      transition:0.2s;
    }

            .card img {
                width: 100%;
                height: auto;
                border-radius: 5px;
                object-fit: contain;
  object-position: center;

            }
            .card-content {
                margin-top: 10px;
                text-align:justify;
            }
            .card-content h2 {
                font-size: 20px;
                margin-bottom: 5px;
            }
            .card-content p {
                font-size: 14px;
                color: black;
                font-weight: 10px;
            }
            .card-row {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
            }
            
            a{
                color:white;
            }
        .desc{
            word-wrap: break-word;
        }
        </style>
        <div class="footer">
        <x-footer/>
        </div>
    </body>
</html>