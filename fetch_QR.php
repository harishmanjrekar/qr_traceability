<?php
require_once 'phpqrcode/qrlib.php';

$servername = "localhost";
$username = "rih";
$password = "adminpassword"; // Add your XAMPP MySQL password here
$dbname = "blockchain"; // Replace "your_database_name" with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the transaction ID from the form submission
$transactionId = $_POST['Transaction_id'];

// Retrieve the QR code from the database
$sql = "SELECT QR FROM QR WHERE Transaction_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $transactionId);
$stmt->execute();
$stmt->bind_result($qrCodeContents);
$stmt->fetch();
$stmt->close();

// Decode the Base64 encoded QR code data
$decodedData = base64_decode($qrCodeContents);

// Create the QR code image from the decoded data
$qrCodeImage = imagecreatefromstring($decodedData);

if ($qrCodeImage !== false) {
    // Set the content type header to image/png
    header('Content-Type: image/png');
    // Output the image
    imagepng($qrCodeImage);
    // Destroy the image resource
    imagedestroy($qrCodeImage);
} else {
    echo "QR code not found for the given Transaction ID.";
}

// Close the database connection
$conn->close();
?>
