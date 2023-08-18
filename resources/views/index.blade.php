<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clubconnect</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
    <x-header/>
    <section class="hero">
        <div class="container" style="padding: 0;">
            <div class="slide active">
                <h1 style="font-size: 36px; color: #333333;">Welcome!</h1>
                <p style="font-size: 18px; color: #333333;">Discover and join various clubs to enhance your skills and pursue your interests</p>
                <a href="index" class="btn" style="font-size: 16px;">Get Started</a>
            </div>
            <div class="slide">
                <h1 style="font-size: 36px; color: #333333;">Technical clubs</h1>
                <p style="font-size: 18px; color: #333333;">Enrich your knowledge and explore new skills</p>
                <a href="tech" class="btn" style="font-size: 16px;">Get Started</a>
            </div>
            <div class="slide">
                <h1 style="font-size: 36px; color: #333333;">Non-technical clubs</h1>
                <p style="font-size: 18px; color: #333333;">Keep it light and indulge in your favourite activities</p>
                <a href="nontech" class="btn" style="font-size: 16px;">Get Started</a>
            </div>
            <div class="arrow prev" onclick="previousSlide()">&#10094;</div>
            <div class="arrow next" onclick="nextSlide()">&#10095;</div>
        </div>
    </section>
    <section class="clubs">
        <div class="container" style="padding: 0;">
            <div class="club-box">
                <div class="slide-in">
                    <a href="tech"><h3 style="font-size: 24px; color: #fff;">Technical Clubs</h3></a>
                </div>
                <div class="club-grid">
                    <div class="club">
                        <img src="images/robotics.png" alt="Club 1">
                        <h3 style="font-size: 20px; color: #333333;">Robotics club</h3>
                        <p style="font-size: 16px; color: #333333;"> Encourages students to work on multidisciplinary projects.</p>
                        <a href="robotics" class="btn" style="font-size: 16px;">Learn More</a>
                    </div>
                    <div class="club">
                        <img src="images/flc.png" alt="Club 2">
                        <h3 style="font-size: 20px; color: #333333;">Finite loop club</h3>
                        <p style="font-size: 16px; color: #333333;">Coding club which encourages students to realize their ideas.</p>
                        <a href="flc" class="btn" style="font-size: 16px;">Learn More</a>
                    </div>
                </div>
                <div class="km">
                        <a href="tech" style="font-size: 20px; color: #FFB715;">Discover more</a>
                </div>
            </div>

            <div class="club-box">
                <div class="slide-in">
                    <a href="nontech"><h3 style="font-size: 24px; color: #fff;">Non-Technical Clubs</h3></a>
                </div>
                <div class="club-grid">
                    <div class="club">
                        <img src="images/rachana.png" alt="Club 3">
                        <h3 style="font-size: 20px; color: #333333;">Rachana</h3>
                        <p style="font-size: 16px; color: #333333;">Explore, live and breathe art with us.</p>
                        <a href="rachana" class="btn" style="font-size: 16px;">Learn More</a>
                    </div>
                    <div class="club">
                        <img src="images/kalasangama.png" alt="Club 4">
                        <h3 style="font-size: 20px; color: #333333;">Kalasangama</h3>
                        <p style="font-size: 16px; color: #333333;">Classical cultural club of NMAMIT Nitte.</p>
                        <a href="kalasangama" class="btn" style="font-size: 16px;">Learn More</a>
                    </div>
                </div>
                <div class="km">
                        <a href="nontech" style="font-size: 20px; color: #FFB715;">Discover more</a>
                </div>
            </div>
        </div>
    </section>

    <style>
        body {
            margin:0;
            font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen,Ubuntu,Cantarell,Fira Sans,Droid Sans,Helvetica Neue,sans-serif;
        }
        .hero {
            background-color: #FFB715;
            padding: 80px 0;
            text-align: center;
            position:relative;
        }
        .slide{
            display:none;
        }
        .slide.active {
            display: block;
        }

        .btn {
            display: inline-block;
            background-color: #2E3192;
            color: #fff;
            padding: 12px 20px;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #00214d;
        }

        .clubs {
            padding: 60px 0;
            position:relative;
        }
        .clubs a{
            text-decoration:none;
        }

        .club-box {
            margin-bottom: 40px;
        }

        .club-box h3 {
            font-size: 24px;
            color: #333333;
        }

        .club-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 20px;
        }

        .club {
            text-align: center;
            padding: 20px;
            background-color: #fff;
            border-radius: 4px;
        }

        .club img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
            border-radius:50%;
        }
        .arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 36px;
            color: #fff;
            cursor: pointer;
            transition: opacity 0.3s;
        }

        .prev {
            left: 10px;
        }

        .next {
            right: 10px;
        }
        .arrow{
            margin-top:30px;
        }

        .arrow:hover {
            opacity: 0.7;
        }
        .slide-in {
            opacity: 0;
            transform: translateX(100px);
            transition: opacity 0.5s ease, transform 0.5s ease;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
            width:300px;
            height:70px;
            background-color:#2E3192;
            border-radius:5px;
            text-align:center;
            align-items: center;
            justify-content: center;
            display: flex;
        }

        .slide-in.active {
            opacity: 1;
            transform: translateX(0);
            text-align:center;
            align-items: center;
            justify-content: center;
        }
        .km{
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
            width:200px;
            height:50px;
            background-color:#fff;
            border-radius:5px;
            text-align:center;
            align-items: center;
            justify-content: center;
            display: flex;
        }
    </style>
    <script>
        let slides = document.querySelectorAll('.slide');
        let currentSlide = 0;

        function showSlide(n) {
            slides[currentSlide].classList.remove('active');
            slides[n].classList.add('active');
            currentSlide = n;
        }

        function nextSlide() {
            let next = (currentSlide + 1) % slides.length;
            showSlide(next);
        }

        function previousSlide() {
            let prev = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(prev);
        }

        setInterval(nextSlide, 5000); 

        var slideInElements = document.querySelectorAll('.slide-in');

function isInViewport(element) {
    var rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)
    );
}

function handleScroll() {
    slideInElements.forEach(function(element) {
        if (isInViewport(element)) {
            element.classList.add('active');
        }
    });
}

window.addEventListener('scroll', handleScroll);

    </script>
    <x-footer/>
</body>
</html>
