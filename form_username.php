<!DOCTYPE html>
<html>
<head>
    <title>Traceability | Add Procurement Details</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/mystyle.css">
    <link rel="stylesheet" href="css/mystyle1.css">
    <link rel="stylesheet" href="css/mystyle2.css">
    <link rel="stylesheet" href="css/mystyle3.css">
    <style>
        body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
        .w3-row-padding img {margin-bottom: 12px}
        /* Set the width of the sidebar to 120px */
        .w3-sidebar {width: 120px;background: #222;}
        /* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
        #main {margin-left: 120px}
        /* Remove margins from "page content" on small screens */
        @media only screen and (max-width: 600px) {#main {margin-left: 0}}
        #quarter1 {background-color: #522B86;
        font-color: white;}
        #quarter2 {background-color: #00B5C7;
        font-color: white;}
    </style>
    <link rel="icon" href="images/gt.png"/>
    <script>
        function showErrorPopup(message) {
            alert(message);
        }

        function validateForm() {
            var password = document.getElementsByName("password")[0].value;
            var birthdate = document.getElementsByName("birthdate")[0].value;

            // Check if password meets the requirements
            if (password.length < 10 || !/\d/.test(password)) {
                showErrorPopup("Password must be at least 10 characters long and contain a number.");
                return false;
            }

            // Check if the user is at least 18 years old
            var currentDate = new Date();
            var selectedDate = new Date(birthdate);
            var ageDiff = currentDate - selectedDate;
            var age = Math.floor(ageDiff / (1000 * 60 * 60 * 24 * 365));

            if (age < 18) {
                showErrorPopup("You must be at least 18 years old to sign up.");
                return false;
            }
        }
    </script>
</head>

<body class="w3-white">
    <div class="w3-top">
        <a href="index.php"><img src="images/gt.png" style="height:55px; width:140px;"></a>
        <a href="index.php">Home</a>
    </div>

    <br>
    <br>
    <br>

    <!-- Page Content -->
    <marquee behavior="scroll" direction="left">Disclaimer: Draft POC without all links and complete data.</marquee>
    <h2 class="w3-text"><font color="#63468F"><center>Traceability using Blockchain POC (Draft)</center></font></h2>
    <br>
    <h3 class="w3-text"><font color="blue"><center>User Signup</center></font></h3>
    <br>
    <br>

    <form method="POST" action="user_submit.php" onsubmit="return validateForm();">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>

		<label for="sector">Sector:</label>
    <select name="sector" required>
        <option value="" selected disabled>Select a sector</option>
        <option value="farmer">Farmer</option>
        <option value="pre_processing">Pre-processing</option>
        <option value="production">Production</option>
    </select><br><br>

        <label for="birthdate">Birthdate:</label>
        <input type="date" name="birthdate" required><br><br>

        <input type="submit" value="Register">
    </form>

    <br><br><br><br>
    <!-- Footer -->
    <footer class="w3-content w3-padding-16 w3-text-orange w3-xlarge">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
        <p class="w3-medium">Powered by <a href="https://www.grantthornton.in/" target="_blank" class="w3-hover-text-green">Grant Thornton Bharat LLP</a></p>
    </footer>
    <!-- End footer -->
</body>
</html>
