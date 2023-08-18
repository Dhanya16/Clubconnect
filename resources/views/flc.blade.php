<html>
    <head>
        <title>ClubConnect</title>
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        
    </head>
    <body>
        
        <x-header/>
        
        <div class="container">
            <article class="card">
                <img src=" https://lh3.googleusercontent.com/p/AF1QipPIdcpZj6E5N2H8ucio3A0ccsUHtPEu-jG4FF8R=s1360-w1360-h1020" alt="About Us" class="cover-image">
                <div class="text-column">
                    <h2 style="font-size: 24px; color: #333333;">About Us</h2>
                    <p style="font-size: 18px; color: #333333;">Finite Loop is a Coding Club, which aims to give a good perspective of development, and encourages students to realize their ideas. We encourage students to participate in competitive programming and thus, inspire the next.</p>
                    <a href="aboutflc" style="font-size: 18px; color: #333333;">Know More</a>
                </div>
            </article>

            <article class="card">
                <img src="https://www.finiteloop.co.in/_next/image?url=%2Fassets%2Fskill-lab.jpeg&w=3840&q=75" alt="Vision and Goals" class="cover-image">
                <div class="text-column">
                    <h2 style="font-size: 24px; color: #333333;">Vision and Goals</h2>
                    <p style="font-size: 18px; color: #333333;">Our vision at Finite Loop is to inspire and empower students to embark on a journey of continuous learning and skill development. We are committed to fostering an environment where students can explore their passions, expand their knowledge, and become well-rounded individuals in their respective fields. Through various educational initiatives and engaging activities, we strive to equip students with the necessary tools and resources to excel in their chosen domains. Our ultimate goal is to instill a lifelong love for learning, enabling students to unleash their full potential and thrive in a rapidly evolving world. Together, let's shape the future by nurturing talented individuals and building a community of passionate learners.</p>
                    <a href="#" style="font-size: 18px; color: #333333;">Know More</a>
                </div>
            </article>
            <h3 class="eve" style="font-size: 36px; color: #333333; text-align:center;">Events</h3>
            <div class="small-cards">
                @php
                    // Sort events in descending order based on creation date
                    $sortedEvents = $events->sortByDesc('created_at');
                    // Limit the number of events to be displayed to 3
                    $limitedEvents = $sortedEvents->take(4);
                    // Get the latest event separately
                    $latestEvent = $sortedEvents->first();
                @endphp
                @foreach ($limitedEvents as $event)
                    <article class="small-card">
                        <div class="text-column">
                            <img src="{{ asset('uploads/event/' .$event->image) }}" alt="{{ $event->title }}" class="cover-image">
                            <h2 style="font-size: 24px; color: #333333;">{{ $event->title }}</h2>
                            <p style="font-size: 18px; color: #333333;">Date:{{ $event->dateFrom }} @if($event->dateTo) to {{ $event->dateTo }} @endif</p>
                            <p style="font-size: 18px; color: #333333;">@if($event->timeFrom) Time:{{ $event->timeFrom }} @endif @if($event->timeTo) to {{ $event->timeTo }} @endif</p>
                            <p style="font-size: 18px; color: #333333;">@if($event->organizers) Organizers:{{ $event->organizers }} @endif</p>
                            <p class="desc" style="font-size: 18px; color: #333333;">{{ $event->description }}</p>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
        <a href="knowmore" class="know-more">Know More</a>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <div class="footer">
        <x-footer/>
</div>
        <style>
    .footer {
        background-color: #2E3192;
        color: #fff;
        padding: 0;
        width: 100%;
    }

    .footer-container {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        max-width: 4000px;
        margin: 0 auto;
        padding: 0;
    }
          
    body {
        font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, sans-serif;
        margin-top: 100px;
        margin:0;
        padding:0;
        background-color: rgba(173, 216, 230, 0.3);
        overflow-x: hidden;
    }
   
    @media screen and (max-width:1286px) {
        .footer {
        background-color: #2E3192;
        color: #fff;
        padding: 28px;

    }
        .des{
            display:none;
        }
        #mob{
            display:block;
        }
        .im{
            height: 100px;
            width: 100px;
            border-radius: 50px;
        }
        a{
            text-decoration:none;
            color:#fff;
        }
        
    }

    .container {
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    .card {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
        background-color: rgba(3, 138, 255, 0.2);
        border-radius: 5px;
        overflow: hidden;
    }

    .card img {
        width: 50%;
        object-fit: cover;
    }

    .card .text-column {
        padding: 20px;
        text-align:justify;
    }

    .card h2 {
        font-size: 24px;
        margin-left: 15px;
    }

    .card p {
        margin-left: 15px;
        font-weight: 400;
    }

    .card a {
        display: inline-block;
        margin-top: 10px;
        margin-left: 15px;
        padding: 10px 20px;
        background-color: #FFB715;
        color: #ffbd03;
        text-decoration: none;
        border-radius: 5px;
    }

    .card:nth-child(1) {
        margin-top: 100px;
    }

    .small-cards {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        text-align:justify;
    }

    .small-card {
        flex-basis: 23%;
        margin-top:30px;
        margin-bottom: 20px;
        color: black;
        background-color: rgba(3, 138, 255, 0.2);
    }

    .small-card img {
        width: 100%;
        height: auto;
    }

    .small-card:hover {
        transform: scale(1.1);
        transition: 0.5s;
    }

    .eve {
        background-color: orange;
        font-size: 50px;
        margin-left: 0px;
        width: 100%;
    }

    .know-more {
        margin-bottom: 30px;
        margin-left: auto;
        color: blue;
    }

    .card:hover img {
        transform: scale(1.1);
        transition: 0.4s;
    }

    .card img:not(:hover) {
        transform: none;
    }

    .desc {
        word-wrap: break-word;
    }

    @media only screen and (max-width: 768px) {
        .small-card {
            flex-basis: 48%;
        }
    }


        </style>
    </body>
</html>