<?php
 include ('database_my.php');
 
 // Retrieve the form data
 $username = $_POST['username'];
 $password = $_POST['password'];
 $sector = $_POST['sector'];
 $birthdate = $_POST['birthdate'];
 
 // Check if password meets the requirements
 if (strlen($password) < 10 || !preg_match('/[0-9]/', $password)) {
     echo "Password must be at least 10 characters long and contain a number.";
     exit;
 }
 
 // Check if the user is at least 18 years old
 $birthTimestamp = strtotime($birthdate);
 $currentTimestamp = time();
 $minimumAge = 18 * 365 * 24 * 60 * 60; // Minimum age in seconds
 
 if ($currentTimestamp - $birthTimestamp < $minimumAge) {
     echo "You must be at least 18 years old to sign up.";
     exit;
 }
        // Prepare and execute SQL statement to insert user data into the "userdata" table
        $stmt = $connection->prepare("INSERT INTO userdata (username, password, sector, birthdate) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $username, $password, $sector, $birthdate);
        if ($stmt->execute()) {
            echo "User registration successful.";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement and the database connection
        $stmt->close();
        $connection->close();
    
    ?>