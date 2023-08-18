<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ClubConnect</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    
   
</head>
<body class="body">
<x-header/>
    <div class="container">
        <div class="circle-container">
            <div class="circle">
                <a href="flc" class="lin">
                    <img src="images/flc.png" alt="flc" class="im">
                </a>
            </div>
            <div class="description-box" style="font-size: 18px; color: #333333;">
                <a href="flc" class="lin">Finite Loop is a Coding Club, which aims to give a good perspective of development, and encourages students to realize their ideas.</a>
            </div>
        </div>
        <div class="circle-container">
            <div class="circle">
                <a href="flc" class="lin">
                    <img src="images/robotics.png" alt="flc" class="im">
                </a>
            </div>
            <div class="description-box" style="font-size: 18px; color: #333333;">
                <a href="flc" class="lin">Robotics club gives an exposure to the students of various disciplines to work on multidisciplinary projects.</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="circle-container">
            <div class="circle">
                <a href="flc" class="lin">
                    <img src="images/aeroclub.png" alt="flc" class="im">
                </a>
            </div>
            <div class="description-box" style="font-size: 18px; color: #333333;">
                <a href="flc" class="lin">In Aeroclub, we encourage and support young minds to gain more knowledge, skills and achieve excellence in aviation field by conducting and participating in various events .</a>
            </div>
        </div>
        <div class="circle-container">
            <div class="circle">
                <a href="flc" class="lin">
                    <img src="images/hackerearth.png" alt="flc" class="im">
                </a>
            </div>
            <div class="description-box" style="font-size: 18px; color: #333333;">
                <a href="flc" class="lin">Our Club Hackerearth_Hub_NMAMIT is a freshly started college-based club yet really active and profound. We in this club motivate our fellow college mates towards competitive programming and its positives.</a>
            </div>
        </div>
    </div>
    <style>
        .body {
            margin: 0;
            padding: 0;
            margin-top:80px;
            font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen,Ubuntu,Cantarell,Fira Sans,Droid Sans,Helvetica Neue,sans-serif;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }

        .circle-container {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
            margin-bottom: 20px;
        }

        .circle {
            position: relative;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            margin-bottom: 20px;
            overflow: hidden;
        }

        .circle img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .description-box {
            width: 500px;
            max-width: 100%;
            height: 200px;
            border-radius: 2px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
            background-color: #FFB715;
            color: #333333;
            text-align: justify;
            line-height: 50px;
            margin-bottom: 20px;
            animation: floating 2s;
            font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Oxygen,Ubuntu,Cantarell,Fira Sans,Droid Sans,Helvetica Neue,sans-serif;
        }

        @keyframes floating {
            0% {
                transform: translateY(100%);
            }
            100% {
                transform: translateY(0);
            }
        }

        .lin {
            text-decoration: none;
            color: inherit;
        }

        .im {
            border-radius: 50%;
            transition: transform 0.3s;
        }

        .im:hover {
            transform: scale(1.1);
        }
        .logo-container {
            display: flex;
            align-items: center;
            margin-top:10px;
        }
        .logo-container img {
            margin-top:-5px;
        }
        .ti{
            margin-top:10px;
        }
        #Button1,
        #Button2,
        #Button5,
        #Button6 {
            background-color: #2E3192;
            border: none;
            cursor: pointer;
            font-size: 22px;
            color: white;
            width:120px;
            margin-top:5px;
            height:50px;
            margin-right:-50px;
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, sans-serif;
        }
        #Button6{
            background-color: #fff;
            border: none;
            cursor: pointer;
            font-size: 22px;
            color: #2E3192;
            width:120px;
            margin-top:5px;
            height:50px;
            border-radius:2px;
            margin-right:-50px;
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, sans-serif;
        }
        #Button3,
        #Button4{
            background-color: #2E3192;
            border: none;
            cursor: pointer;
            font-size: 22px;
            color: white;
            padding: 8px 0px;
            width:200px;
            height:50px;
            margin-right:-50px;
            margin-left:-50px;
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, sans-serif;
        }

        .l{
            margin-top:10px; 
        }
        
        footer {
        background-color: #2E3192;
        color: #fff;
        padding: 30px 0;
        font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, sans-serif;

    }

    .footer-container {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .footer-left h1 {
        color: #fff;
        margin-bottom: 10px;
        margin-top:50px;
        font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, sans-serif;
    }

    .footer-left p {
        color: #f6f8fa;
        font-size: 14px;
    }
    .footer-left a{
        text-decoration:none;
    }

    .footer-right {
        display: flex;
        gap: 150px;
    }

    .footer-column {
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease-in-out;
    }

    .footer-column:hover {
        transform: scale(1.05);
    }

    .footer-column:before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.2);
        transition: all 0.3s ease-in-out;
    }

    .footer-column:hover:before {
        left: 0;
    }

    .footer-column h4 {
        color: #fff;
        margin-bottom: 10px;
        transition: all 0.3s ease-in-out;
    }

    .footer-column:hover h4 {
        color: #FFB715;
    }

    .footer-column p {
        color: #f6f8fa;
        font-size: 14px;
        transition: all 0.3s ease-in-out;
    }

    .footer-column:hover p {
        color: #ccc;
    }

    .footer-right .footer-links {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .footer-right .footer-links li {
        margin-bottom: 10px;
    }

    .footer-right .footer-links a {
        color: #f6f8fa;
        text-decoration: none;
        transition: color 0.3s;
    }

    .footer-right .footer-links a:hover {
        color: #ccc;
    }
    .flex{
        display:flex;
    }
    .image3{
        height: 100px;
        width: 100px;
        border-radius: 50px;
        margin-top:40px;
        margin-right:20px;
        margin-left:-8%;
    }
    #mob{
        display:none;
    }
    @media screen and (max-width:1286px) {
        footer{
            background-color: #2E3192;
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
    </style>
    <x-footer/>
</body>

</html>
