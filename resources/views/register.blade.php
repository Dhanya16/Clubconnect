<!DOCTYPE html>
<html>
<head>
  <title>ClubConnect</title>
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Fira Sans, Droid Sans, Helvetica Neue, sans-serif;
      background-color:rgb(49,49,146);
      color: #333333;
      margin: 0;
      padding: 20px;
    }
    

    .form-container {
      background-color: #FFFFFF;
      padding: 40px;
      border-radius: 5px;
    }

    label {
      display: block;
      margin-bottom: 10px;
      font-size: 18px;
    }

    input[type="text"],
    textarea {
      width: 100%;
      padding: 10px;
      border-radius: 3px;
      border: 1px solid #CCCCCC;
      resize: vertical;
    }

    input[type="submit"] {
      background-color: #FFB715;
      color: #333333;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      border-radius: 3px;
      font-size: 18px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      transform: scale(1.1);
      transition: transform 0.2s ease-in-out;
    }

    .custom-select {
      position: relative;
      display: inline-block;
    }

    .custom-select select {
      display: none;
    }

    .select-selected {
      background-color: #FFFFFF;
      padding: 8px;
      border-radius: 3px;
      border: 1px solid #CCCCCC;
      cursor: pointer;
    }

    .select-selected:after {
      content: '';
      position: absolute;
      top: 14px;
      right: 10px;
      width: 0;
      height: 0;
      border: 6px solid transparent;
      border-color: #333333 transparent transparent transparent;
    }

    .select-items div {
      color: #333333;
      padding: 8px;
      cursor: pointer;
    }

    .select-items div:hover {
      background-color: #CCCCCC;
    }

    .select-hide {
      display: none;
    }

    .registration-heading {
      background-color: #FFB715;
      color: #333333;
      padding: 20px;
      height: 10vh;
      font-size: 24px;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      border-radius: 5px;
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

  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-8">
        <div class="registration-heading">
          <h2>REGISTRATION FORM</h2>
        </div>
        <div class="form-container">
        @if (session('status'))
            <h6 class="alert-alert-sucess" style="color:green;">{{ session('status') }}</h6>
        @endif
          <form action="register" method="POST">
            @csrf
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" id="name" name="name" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="usn">USN:</label>
              <input type="text" id="usn" name="usn" class="form-control" maxlength="11" required>
            </div>

            <div class="form-group">
              <label for="sem">Semester:</label>
              <input type="text" id="sem" name="sem" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="branch">Branch:</label>
              <input type="text" id="branch" name="branch" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="phone">Phone Number:</label>
              <input type="text" id="phone" name="phone" class="form-control" pattern="[0-9]{10}" maxlength="10" required>
            </div>

            <div class="form-group">
              <label for="hobbies">Hobbies:</label>
              <textarea id="hobbies" name="hobbies" rows="4" class="form-control"></textarea>
            </div>

            <div class="form-group">
  <label for="clubs">Clubs to Join:</label>
  <select id="clubs" name="clubs"  >
    <option value="" >Select one of the below</option>
    <option value="technical" disabled>Technical Clubs</option>
    <option value="" disabled >Select one of the below</option>
    <option value="flc" >Finite loop club</option>
    <option value="robotics" >Robotics club</option>
    <option value="aero" >Aero club</option>
    <option value="hacker" >Hacker-earth hub</option> 
    <option value="nontechnical" disabled>Non-Technical Clubs</option>
    <option value="" disabled>Select one of the below</option>
    <option value="rachana" >Rachana</option>
    <option value="kalasangama" >Kalasangama</option>
    <option value="ecolution" >Ecolution</option>
    <option value="annadaana" >Annadaana</option> 
  </select>
</div>



            <div class="form-group">
              <label for="reasons">What do you like about your preferred club?</label>
              <textarea id="reasons" name="reasons" rows="4" class="form-control"></textarea>
            </div>

            <div class="form-group">
              <input type="submit" value="Submit" class="btn btn-primary btn-submit">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener("click", function (e) {
      closeAllSelect();
    });

    function closeAllSelect() {
      var x, y, i;
      x = document.getElementsByClassName("select-selected");
      y = document.getElementsByClassName("select-items");
      for (i = 0; i < y.length; i++) {
        y[i].classList.add("select-hide");
      }
      for (i = 0; i < x.length; i++) {
        x[i].classList.remove("select-arrow-active");
      }
    }

    function selectItem(element) {
      var selectedItem = element.innerHTML;
      var selectInput = element.closest(".custom-select").querySelector("input[type='text']");
      selectInput.value = selectedItem;
      closeAllSelect();
    }

    document.getElementById("clubs").addEventListener("click", function (e) {
      e.stopPropagation();
      closeAllSelect();
      this.nextElementSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });

    var clubs = document.getElementsByClassName("select-items")[0].getElementsByTagName("div");
    for (var i = 0; i < clubs.length; i++) {
      clubs[i].addEventListener("click", function (e) {
        selectItem(this);
      });
    }

    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape" || e.key === "Enter") {
        closeAllSelect();
      }
    });
    var phoneInput = document.getElementById("phone");
  var phoneError = document.getElementById("phone-error");

  phoneInput.addEventListener("input", function() {
    var phoneNumber = phoneInput.value.replace(/\D/g, ""); // Remove non-digit characters
    phoneInput.value = phoneNumber.slice(0, 10); // Truncate to 10 digits
    phoneError.textContent = phoneNumber.length !== 10 ? "Phone number must be 10 digits" : "";
  });
  </script>

</body>
</html>
