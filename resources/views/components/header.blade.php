<body>
    <div class="header">
        <div class="push">
            <ul class="list">
                <li id="li"><button id="Button1">Home</button></li>
                <li id="li" class="dropdown">
                    <button id="Button2">Pages<span>↓</span></button>
                    <ol class="dropdown-menu">
                        <li id="li"><button id="Button3">Technical clubs</button></li>
                        <li id="li"><button id="Button4">Non technical clubs</button></li>
                    </ol>
                </li>
                <li id="li"><button id="Button6">Register</button></li>
                <li id="li" class="l"><a href="userlogout">Logout</a></li>
            </ul>
        </div>
        <div class="logo-container">
            <a href="index"><img class="image2" src="images/logo.png"></a>
            <a href="index"><p class="ti">Clubconnect</p></a>
        </div>
    </div>
    <div class="pop">
        <button class="menu-button" id="menuButton">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="menu" id="menu">
            <div class="menu-content">
                <a href="index">Home</a>
                <div id="lim" class="dropdown">
                    <a href="#" id="Buttonm" class="dropdown-toggle">Pages</a>
                    <div class="dropdown-menu">
                        <a href="tech">> Technical clubs</a>
                        <a href="nontech">> Non-technical clubs</a>
                    </div>
                </div>
                <a href="register">Register</a>
                <a href="logout">Logout</a>
            </div>
            <div class="close-button" id="closeButton">&times;</div>
        </div>
    </div>
    <style>
        .logo-container a{
            text-decoration:none;
        }

        .list {
            list-style: none;
            cursor: pointer;
            display: inline-flex;
        }

        .header {
            background-color: #2E3192;
            position: fixed;
            top: 0;
            width: 100%;
            height: 80px;
            z-index: 1;
        }
        .ti{
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, sans-serif;
            color:white;
            font-size:30px;
            font-weight:bold;
        }
        .logo-container {
            display: flex;
            align-items: center;
            margin-top:-10px;
        }

        .logo-container img {
            margin-right: 10px;
        }

        #li {
            margin-right: 50px;
            margin-left: 0;
            position: relative;
        }

        #li .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #2E3192;
            padding: 10px ;
            width:220px;
        }

        #li:hover .dropdown-menu {
            display: block;
        }

        .dropdown-menu #li {
            padding: 10px ;
            list-style-type: none;
            margin-left:0px;
            margin-right:0px;
            margin-top:0px;
            margin-bottom:0px;
            text-align: justify;
        }

        .header #li {
            margin-left: 40px;
        }

        .push {
            position: absolute;
            left: 90%;
            transform: translateX(-150%);
            top: 12px;
            margin-left: 500px;
        }

        .image2 {
            height: 50px;
            width: 50px;
            margin-left: 40px;
            border-radius: 50px;
            margin-top: 0px;
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
            margin-top:-10px;
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
            margin-top:-10px;
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
            width:220px;
            height:50px;
            margin-right:-50px;
            margin-left:-50px;
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, sans-serif;
        }
        #Button1:hover,#Button2:hover,#Button5:hover{
            background-color:#00214d;
        }
        #Button4:hover,#Button3:hover{
            background-color:#00214d;
            padding: 8px 0px;

            
        }
        #li a{
            color:#fff;
            font-size: 22px;
        }
        .pop{
            display:none;
        }
        @media screen and (max-width: 1068px) {
            .push {
                display:none;
            }
            .logo-container {
                display: flex;
                align-items: center;
                margin-top:-10px;
            }

            .logo-container img {
                margin-right: 10px;
            }
            .pop{
                display:block;
            }
            .menu-button {
                background-color: transparent;
                border: none;
                cursor: pointer;
                padding: 0;
                position: fixed;
                top: 20px;
                right: 20px;
                z-index: 9999;
                color: #fff;
            }
            .menu-button span {
                display: block;
                width: 24px;
                height: 3px;
                background-color: #fff;
                margin-bottom: 5px;
                margin-top: 3px;
            }
            .menu {
                position: fixed;
                top: 0;
                left: 0;
                width: 50%;
                height: 100%;
                background-color: rgba(0, 0, 0, 1);
                display: none;
                z-index: 9998;
            }
            .menu.open {
                display: block;
            }
            .menu-content {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
            }
            .menu-content a {
                display: block;
                margin-bottom: 10px;
                color: #fff;
                text-decoration: none;
                font-size: 18px;
                font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, sans-serif;
            }
            .close-button {
                position: absolute;
                top: 20px;
                right: 20px;
                cursor: pointer;
                color: #fff;
                font-size: 24px;
            }
            .dropdown-menu {
    display: none;
}

.dropdown.open .dropdown-menu {
    display: block;
}
        }
    </style>
    <script>
        const myButton1 = document.getElementById("Button1");
        myButton1.addEventListener("click", function() {
            window.location = "index";
        });

        const myButton3 = document.getElementById("Button3");
        myButton3.addEventListener("click", function() {
            window.location = "tech";
        });

        const myButton4 = document.getElementById("Button4");
        myButton4.addEventListener("click", function() {
            window.location = "nontech";
        });

        const myButton6 = document.getElementById("Button6");
        myButton6.addEventListener("click", function() {
            window.location = "register";
        });
        var menuButton = document.getElementById('menuButton');
        var menu = document.getElementById('menu');
        var closeButton = document.getElementById('closeButton');

        menuButton.addEventListener('click', function() {
            menu.classList.add('open');
        });

        closeButton.addEventListener('click', function() {
            menu.classList.remove('open');
        });
        const dropdownToggle = document.querySelector('.dropdown-toggle');
const dropdownMenu = document.querySelector('.dropdown-menu');

dropdownToggle.addEventListener('click', function () {
    dropdownToggle.parentNode.classList.toggle('open');
});



    </script>
</body>
