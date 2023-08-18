<head>
    <title>ClubConnect</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <style>
        body{
            background-image:url('images/nmamit.png');
            background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
            overflow:hidden;
            animation: moving-background 10s linear infinite;   
        }
        @keyframes moving-background {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
    </style>
</head>
<body>
    <div class="box">
    </div>
    <h1 class="title">SIGN UP</h1>
    <form action="userSign" method="POST">
        @csrf
        <input type="text" name="name" class="textbox" placeholder="Username"><br><br>
        <input type="password" name="username" class="textbox" placeholder="Password"><br><br>
        <input type="password" id="confirm-password" name="password" class="textbox" placeholder="Confirm Password"><br><br>
        <button type="submit" class="signup">Sign up</button>
        <a href="login" class="link">Already have an acoount? <u>Log in</u></a>
    </form>
    <style>
        .box{
            text-align:center;
            margin-top:160px;
            margin-left:480px;
            margin-right:500px;
            opacity:0.5;
            width:600px;
            height:450px;
            background-color: white;
            border-radius:20px;
        }
        .title{
            font-family:cursive;
            font-style:bold;
            font-size:50px;
            text-align:center;
            position:relative;
            top:-450px;
        }
        .textbox {
            width: 300px;
            border: none;
            font-family: cursive;
            background-color: white;
            position:relative;
            right:-610px;  
            height:40px;   
        }
        input[type="text"]{
            top:-450px;
            font-size: 15px;
        }
        input[type="password"]{
            top:-450px;
            font-size: 15px;
        }
        .signup{
            color:white;
            background-color:rgb(0, 128, 255);
            border:none;
            top:-440px;
            position:relative;
            right:-700px;
            width:120px;
            height:60px;
            font-family: cursive;
            font-size: 25px;
            cursor:pointer;
        }
        .link{
            position:relative;
            top:-370px;
            right:-500px;
            font-family: cursive;
            font-size: 20px;
            text-decoration:none;
            color:rgb(0, 128, 255);
            font-style:bold;
        }
    </style>
    <script>

    </script>
</body>
