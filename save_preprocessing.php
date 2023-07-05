<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'phpqrcode/qrlib.php';

include ('database_my.php');



// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Get the values from the HTML form
$Transaction_id = $_POST['Transaction_id'];
$date_of_cleaning = $_POST['date_of_cleaning'];
$Date_of_carding = $_POST['Date_of_carding'];
$Number_of_reels = $_POST['Number_of_reels'];
$Wastage_in_KG = $_POST['Wastage_in_KG'];

// Get farmer name and ID from the mastertable based on Transaction_id
$stmtFarmer = $connection->prepare("SELECT farmer_name, farmer_id, hash_value FROM mastertable WHERE Transaction_id = ?");
$stmtFarmer->bind_param("i", $Transaction_id);
$stmtFarmer->execute();
$stmtFarmer->bind_result($farmer_name, $farmer_id, $hash_value);
$stmtFarmer->fetch();
$stmtFarmer->close();

// Prepare the SQL statement for inserting into the pre_processing table
$stmt = $connection->prepare("INSERT INTO pre_processing (Transaction_id, date_of_cleaning, Date_of_carding, Number_of_reels, Wastage_in_KG) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("issii", $Transaction_id, $date_of_cleaning, $Date_of_carding, $Number_of_reels, $Wastage_in_KG);

// Prepare the SQL statement for updating the status in mastertable
$stmtUpdateStatus = $connection->prepare("UPDATE mastertable SET status = 2 WHERE Transaction_id = ?");

// Execute the statement for inserting into the pre_processing table
if ($stmt->execute()) {
    echo '<script>alert("Pre-processing details saved successfully."); window.location.href = "index.php";</script>';



    // Update the status in mastertable
    $stmtUpdateStatus->bind_param("i", $Transaction_id);
    $stmtUpdateStatus->execute();
} else {
    echo "Error: " . $stmt->error;
}

// Generate QR code and store in qr_preprocessing and reels tables
for ($i = 1; $i <= $Number_of_reels; $i++) {
    $Reel_id = $i;

    // Generate QR code data for each reel
    $qrCodeData = json_encode([
        'Reel_id' => $Reel_id,
        'Transaction_id' => $Transaction_id,
        'Date_of_carding' => $Date_of_carding,
        'date_of_cleaning' => $date_of_cleaning,
        'farmer_name' => $farmer_name,
        'farmer_id' => $farmer_id,
        'hash_value' => $hash_value,
        'Wastage_in_KG' => $Wastage_in_KG
    ]);

    // Generate the hash using a hashing algorithm (e.g., SHA-256)
    $hash = hash('sha256', $qrCodeData);

    // Store the hash in the pre_processing table
    $stmtHash = $connection->prepare("UPDATE pre_processing SET preprocessing_hash = ? WHERE Transaction_id = ?");
    $stmtHash->bind_param("si", $hash, $Transaction_id);
    $stmtHash->execute();
    $stmtHash->close();

    // Update the QR code data with the hash value
    $qrCodeData = json_encode([
        'Reel_id' => $Reel_id,
        'Transaction_id' => $Transaction_id,
        'Date_of_carding' => $Date_of_carding,
        'date_of_cleaning' => $date_of_cleaning,
        'farmer_name' => $farmer_name,
        'farmer_id' => $farmer_id,
        'Wastage_in_KG' => $Wastage_in_KG,
        'hash_value' => $hash_value,
        'hash_preprocessing' => $hash
    ]);

    // Generate QR code image file
    $qrCodeFile = 'phpqrcode/reel_' . $Reel_id . '.png'; // Path to save the QR code image

    // Generate QR code image file
    QRcode::png($qrCodeData, $qrCodeFile, QR_ECLEVEL_L, 10);

    // Store the QR code in the qr_preprocessing table
    $qrCodeContents = file_get_contents($qrCodeFile);
    $qrCodeBase64 = base64_encode($qrCodeContents);

    $stmtQr = $connection->prepare("INSERT INTO qr_preprocessing (Transaction_id, Reel_id, QR_preprocessing) VALUES (?, ?, ?)");
    $stmtQr->bind_param("iis", $Transaction_id, $Reel_id, $qrCodeBase64);
    $stmtQr->execute();
    $stmtQr->close();

    // Store the reel and transaction information in the reels table
    $stmtReels = $connection->prepare("INSERT INTO reels (Transaction_id, Reel_id) VALUES (?, ?)");
    $stmtReels->bind_param("ii", $Transaction_id, $Reel_id);
    $stmtReels->execute();
    $stmtReels->close();
}

// Close the statements and the database connection
$stmtUpdateStatus->close();
$stmt->close();
$connection->close();
?>
