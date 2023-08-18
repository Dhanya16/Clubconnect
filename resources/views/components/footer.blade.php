<footer class="des">
    <div class="footer-container">
        <div class="flex">
            <a href="index"><img class="image3" src="images/logo.png"></a>
            <div class="footer-left">
                <a href="index"><h1>ClubConnect</h1></a>
                <a href="index"><p>&copy; 2023 ClubConnect. All rights reserved.</p></a>
            </div>
        </div>
        <div class="footer-right">
            <div class="fo">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="index">Home</a></li>
                    <li><a href="aboutus">About</a></li>
                    <li><a href="tech">Tech Clubs</a></li>
                    <li><a href="nontech">Non-tech Clubs</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Disclaimer</h3>
                <p>This is a sample website for demonstration purposes only.</p>
            </div>
        </div>
    </div>
</footer>
<footer id="mob" class="bg-primary text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="d-flex">
                    <a href="index"><img class="im" src="images/logo.png"></a>
                    <div class="footer-left">
                        <a href="index"><h1>ClubConnect</h1></a>
                        <a href="index"><p>&copy; 2023 ClubConnect. All rights reserved.</p></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-6">
                        <div class="fo">
                            <h3>Quick Links</h3>
                            <ul class="footer-links">
                                <li><a href="index">Home</a></li>
                                <li><a href="aboutus">About</a></li>
                                <li><a href="tech">Tech Clubs</a></li>
                                <li><a href="nontech">Non-tech Clubs</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-column">
                            <h3>Disclaimer</h3>
                            <p>This is a sample website for demonstration purposes only.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<style>
    footer {
        background-color: #2E3192;
        color: #fff;
        padding: 30px 0;
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
