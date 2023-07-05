<?php
require_once 'phpqrcode/qrlib.php';

include ('database_my.php');


// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Get the values from the HTML form
$farmerName = $_POST['farmer_name'];
$farmerId = $_POST['farmer_id'];
$farmDetail = $_POST['farm_detail'];
$quantity = $_POST['quantity'];

// Prepare the SQL statement
$stmt = $connection->prepare("INSERT INTO mastertable (farmer_name, farmer_id, farm_detail, quantity, hash_value) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sisis", $farmerName, $farmerId, $farmDetail, $quantity, $hash);

// Execute the statement
if ($stmt->execute()) {
    echo "Farmer details saved successfully.";
} else {
    echo "Error: " . $stmt->error;
}

// Get the maximum Transaction_id from mastertable
$stmt5 = $connection->prepare("SELECT MAX(Transaction_id) as maxId from mastertable");
$stmt5->execute();
$result1 = $stmt5->get_result();

// Check if a result is obtained
if ($result1->num_rows > 0) {
    $row = $result1->fetch_assoc();
    $maxId = $row['maxId'];
} else {
    // No result found, handle the case accordingly
    echo "Error: " . $stmt5->error;
}

// Convert the maxTransactionId to a string
$maxId = strval($maxId);

// Create the data string to be hashed
$dataString = $maxId . $farmerName . $farmerId . $farmDetail . $quantity;

// Generate the hash using a hashing algorithm (e.g., SHA-256)
$hash = hash('sha256', $dataString);

// Update the hash value in mastertable
$stmt3 = $connection->prepare("UPDATE mastertable SET hash_value = ? WHERE Transaction_id = ?");
$stmt3->bind_param("si", $hash, $maxId);

// Execute the statement
if ($stmt3->execute()) {
    echo "Block details saved successfully.";
} else {
    echo "Error: " . $stmt3->error;
}

// Generate QR code data
$qrCodeData = json_encode(array(
    'Transaction_id' => $maxId,
    'Farmer_name' => $farmerName,
    'Farmer_id' => $farmerId,
    'Farm_detail' => $farmDetail,
    'Quantity' => $quantity,
    'Hash_value' => $hash
));

// Generate QR code image file
$qrCodeFile = 'phpqrcode/' . $maxId . '.png'; // Path to save the QR code image
QRcode::png($qrCodeData, $qrCodeFile, QR_ECLEVEL_L, 10);

// Store the QR code in the database
$qrCodeContents = file_get_contents($qrCodeFile);
$qrCodeBase64 = base64_encode($qrCodeContents);
$stmt1 = $connection->prepare("INSERT INTO QR (Transaction_id, QR) VALUES (?, ?)");
$stmt1->bind_param("is", $maxId, $qrCodeBase64);
$stmt1->execute();
$stmt1->close();

// Display the QR code image
echo '<img src="data:image/png;base64,' . $qrCodeBase64 . '" alt="QR Code">';

// Close the statements and the database connection
$stmt3->close();
$stmt5->close();
$stmt->close();
$connection->close();
?>