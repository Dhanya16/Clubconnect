<head>
    <title>ClubConnect</title>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
    <div class="navbar">
        <img src="images/admin.png" class="admin-image" alt="admin">
        <span class="admin-name">{{ session('username') }}</span>
        <a class="adpage" href="adpage">Home</a>
        <a href="create">Create event</a>
        <a class="adpage" href="reginfo">Register info</a>
        <div class="logout">
            <button id="logout"><a href="logout">Logout</a></button>
        </div>
    </div>
    @if (session('status'))
        <h6 class="alert-alert-sucess">{{ session('status') }}</h6>
    @endif
    <div class="edit">
        <form action="adpage" method="POST" enctype="multipart/form-data">
            @csrf
            <label>Title:</label><br><br>
            <input type="text" name="title" placeholder="Title" required/><br><br>
            <label>Organizers:</label><br><br>
            <textarea class="org" type="text" name="organizers" placeholder="Organizers" multiple></textarea><br><br>
            <label for="image">Image:</label>
            <input type="file" name="image" id="image" required><br><br>
            <label>Date:</label><br><br>
            <label>From:</label>
            <input type="date" id="dateFrom" name="dateFrom" placeholder="From" required/>
            <label>To:</label>
            <input type="date" id="dateTo" name="dateTo" placeholder="To" /><br><br>
            <label>Time:</label><br><br>
            <label>From:</label>
            <input type="time" id="timeFrom" name="timeFrom" placeholder="From" />
            <label>To:</label>
            <input type="time" id="timeTo" name="timeTo" placeholder="To" /><br><br>
            <label>Description:</label><br><br>
            <textarea name="description" placeholder="Description" required maxlength="500"></textarea><br><br>
            <button type="submit">Submit</button>
        </form>
    </div>
    <style>
        body{
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, sans-serif;
        }
        .admin-image {
            border-radius: 50%;
            width: 50px;
            height: 50px;
            margin: 10px;
            display: block;
        }

        .admin-name {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
            margin-left: 10px;
            font-size: 10px;
        }

        .navbar {
            background-color: #f1f1f1;
            overflow: hidden;
            height: 100vh;
            width: 150px;
            position: fixed;
            top: 0;
            left: 0;
            font-size: 20px;
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

        .logout {
            margin-left: 10px;
        }

        .edit {
            margin-left: 170px;
            margin-top: 50px;
            padding: 20px;
            background-color: #f1f1f1;
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
        .edit input[type="time"] {
            width: 30%;
            margin-left: 30px;
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

        .alert-alert-sucess {
            margin-left: 170px;
            background-color: #4CAF50;
            color: #fff;
            font-size: 20px;
            text-align: center;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        /* Media Queries */
        @media only screen and (max-width: 768px) {
            .navbar {
                width: 100%;
                position: static;
                height: auto;
            }

            .edit {
                margin-left: 0;
                margin-top: 50px;
                padding: 20px;
                background-color: #f1f1f1;
            }
        }
    </style>
</body>
