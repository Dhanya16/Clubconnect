<head>
    <title>ClubConnect</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
    <div class="navbar">
        <img src="images/admin.png" class="admin-image" alt="admin">
        <span class="admin-name" >{{session('username')}}</span>
        <a class="adpage" href="adpage">Home</a>
        <a href="create" onclick="toggleEventDivision()">Create event</a>
        <a class="adpage" href="reginfo">Register info</a>
        <div class="logout">
		    <button id="logout"><a href="logout">Logout</a></button>
        </div>
    </div>
    <div class="home" id="homeDivision" >
        @foreach ($events->sortByDesc('created_at') as $event)
            <div class="home-1">
                <div class="desc3"><img src="{{ asset('uploads/event/' .$event->image) }}" alt="{{ $event->title }}" class="cover-image"></div>
                <div class="desc2"><h1 style="font-size: 24px; color: #333333;">{{ $event->title }}</h1>
                <p style="font-size: 18px; color: #333333;">Date:{{ $event->dateFrom }}  @if($event->dateTo) to {{ $event->dateTo }} @endif</p>
                <p style="font-size: 18px; color: #333333;">@if($event->timeFrom) Time:{{ $event->timeFrom }} @endif  @if($event->timeTo) to {{ $event->timeTo }} @endif</p>
                <p style="font-size: 18px; color: #333333;"> @if($event->organizers) Organizers:{{ $event->organizers }} @endif</p></div>
                <div class="desc1"><p style="font-size: 18px; color: #333333;">{{ $event->description }}</p></div>
            </div>
        @endforeach
    </div>
    <div class="edit" id="eventDivision">
        <form action="adpage" method="POST" enctype="multipart/form-data">
            @csrf
            <label>Title:</label><br><br>
            <input type="text" name="title" placeholder="Title" /><br><br>
            <label for="image">Image</label>
            <input type="file" name="image" id="image"><br><br>
            <label>Date:</label><br><br>
            <label>From:</label>
            <input type="date" id="dateFrom" name="dateFrom" placeholder="From" />
            <label>To:</label>
            <input type="date" id="dateTo" name="dateTo" placeholder="To" /><br><br>
            <label>Time:</label><br><br>
            <label>From:</label>
            <input type="time" id="timeFrom" name="timeFrom" placeholder="From" />
            <label>To:</label>
            <input type="time" id="timeTo" name="timeTo" placeholder="To" /><br><br>
            <label>Description:</label><br><br>
            <textarea name="description" placeholder="Description"></textarea><br><br>
            <button type="submit">Submit</button>
        </form>
    </div>
    <style>
        body{
            overflow-x:hidden;
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, sans-serif;
        }
        .admin-image{
            border-radius:50%;
            width:50px;
            height:50px;
            margin:10px;
            display:block;
        }
        .admin-name{
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
            margin-left:10px;
            font-size:10px;
        }
        .navbar {
            background-color: #f1f1f1;
            overflow: hidden;
            height: 100vh;
            width: 150px;
            position: fixed;
            top: 0;
            left: 0;
            font-size:20px;
        }

        .navbar a {
            display: block;
            color: #000;
            padding: 16px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #4CAF50;
        }

        .navbar a:active {
            background-color: #4CAF50;
            color: #fff;
        }
        .logout{
            margin-left:10px;
        }
        .edit {
            margin-left: 170px; 
            margin-top: 50px; 
            padding: 20px;
            background-color: #f1f1f1;
            display: none;
        }

        .edit input[type="text"],
        .edit textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .edit input[type="date"],
        .edit input[type="time"]{
            width: 30%;
            margin-left:30px;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .edit textarea {
            height: 100px;
        }

        .edit button[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .edit button[type="submit"]:hover {
            background-color: #45a049;
        }

        .home-1 {
            padding: 20px;
            background-color: #f1f1f1;
            margin-left: 170px; 
            margin-top: 50px;
            width: 520px;
            height:700px;
            vertical-align: top;
            display: inline-block;
            text-align:justify;
        }
        .cover-image{
            width:200px;
            height:200px;
        }
        .desc1{
            word-wrap: break-word;
        }
    </style>
    <script>
    function toggleEventDivision() {
        var eventDivision = document.getElementById('eventDivision');
        if (eventDivision.style.display === 'none') {
        eventDivision.style.display = 'block'; // Show the event division
    } else {
        eventDivision.style.display = 'none'; // Hide the event division
    }
    }
</script>

</body>

