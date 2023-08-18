<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ClubConnect</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('images/nmamit.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            overflow: hidden;
            height: 100vh; /* Added */
        }
        .box {
            text-align: center;
            opacity: 0.9;
            width: 400px;
            height: auto;
            max-width: 90%;
            padding: 40px;
            margin: 160px auto;
            background-color: white;
            border-radius: 20px;
        }
        .title {
            font-family: cursive;
            font-style: bold;
            font-size: 30px;
            margin-bottom: 30px;
        }
        .textbox {
            width: 100%;
            border: none;
            font-family: cursive;
            background-color: #f0f0f0;
            padding: 10px 15px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .login {
            color: white;
            background-color: rgb(0, 128, 255);
            border: none;
            width: 100%;
            height: 50px;
            font-family: cursive;
            font-size: 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .error-message {
            color: red;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="box">
                    <h1 class="title">LOG IN</h1>
                    @if(session('error'))
                        <div class="error-message">
                            {{ session('error') }}
                        </div>
                    @endif
                    <form action="user" method="POST">
                        @csrf
                        <input type="text" name="username" class="textbox" placeholder="Username">
                        <input type="password" name="password" class="textbox" placeholder="Password">
                        <button type="submit" class="login">Log in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
