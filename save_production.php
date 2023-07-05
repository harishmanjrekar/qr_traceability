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
$Reel_id = $_POST['Reel_id'];
$Artist_Weaving = $_POST['Artist_Weaving'];
$Weaving_Date = $_POST['Weaving_Date'];
$Artist_Dyeing = $_POST['Artist_Dyeing'];
$Dyeing_Date = $_POST['Dyeing_Date'];
$Weaving_Location = $_POST['Weaving_Location'];
$Dyeing_Location = $_POST['Dyeing_Location'];
$Number_of_Fabrics = $_POST['Number_of_Fabrics'];

// Prepare the SQL statement for inserting into the production table
$stmt = $connection->prepare("INSERT INTO production (Artist_Weaving,Weaving_Date,Artist_Dyeing,Dyeing_Date,Weaving_Location,Dyeing_Location,Transaction_id,Reel_id,Number_of_Fabrics) VALUES (?, ?, ?, ?, ?,?,?,?,?)");
$stmt->bind_param("ssssssiii", $Artist_Weaving, $Weaving_Date, $Artist_Dyeing, $Dyeing_Date, $Weaving_Location ,$Dyeing_Location,$Transaction_id,$Reel_id,$Number_of_Fabrics);

// Prepare the SQL statement for updating the status in pre_processing
$stmtUpdateStatus = $connection->prepare("UPDATE reels SET Reel_status= 2 WHERE Transaction_id = ? and Reel_id=?");

// Execute the statement for inserting into the pre_processing table
if ($stmt->execute()) {
    echo '<script>alert("Production details saved successfully."); window.location.href = "index.php";</script>';

    // Update the status in pre_processing
    $stmtUpdateStatus->bind_param("ii", $Transaction_id, $Reel_id);
    $stmtUpdateStatus->execute();
} else {
    echo "Error: " . $stmt->error;
}

// Retrieve additional details from master table (replace `mastertable` with the actual name of your master table)
$masterQuery = $connection->prepare("SELECT farmer_name, farm_detail, hash_value FROM mastertable WHERE Transaction_id = ?");
$masterQuery->bind_param("i", $Transaction_id);
$masterQuery->execute();
$masterResult = $masterQuery->get_result();

if ($masterResult->num_rows > 0) {
    $masterData = $masterResult->fetch_assoc();
    $farmer_name = $masterData['farmer_name'];
    $farm_detail = $masterData['farm_detail'];
    $hash_value = $masterData['hash_value'];
} else {
    $farmer_name = '';
    $farm_detail = '';
    $hash_value ='';
}

// Retrieve additional details from pre_processing table (replace `pre_processing` with the actual name of your pre_processing table)
$preProcessingQuery = $connection->prepare("SELECT date_of_cleaning, Date_of_carding, preprocessing_hash FROM pre_processing WHERE Transaction_id = ?");
$preProcessingQuery->bind_param("i", $Transaction_id);
$preProcessingQuery->execute();
$preProcessingResult = $preProcessingQuery->get_result();

if ($preProcessingResult->num_rows > 0) {
    $preProcessingData = $preProcessingResult->fetch_assoc();
    $date_of_cleaning = $preProcessingData['date_of_cleaning'];
    $Date_of_carding = $preProcessingData['Date_of_carding'];
    $preprocessing_hash = $preProcessingData['preprocessing_hash'];
} else {
    $date_of_cleaning = '';
    $Date_of_carding='';
}

// Generate QR code and store in qr_production and fabrics tables
for ($i = 1; $i <= $Number_of_Fabrics; $i++) {
    $Fabric_id = $i;

    // Generate QR code data for each reel
    $qrCodeData = json_encode([
        'Reel_id' => $Reel_id,
        'Transaction_id' => $Transaction_id,
        'Fabric_id' => $Fabric_id,
        'Hash' => $hash_value,
        'Pre Processing Hash'=>$preprocessing_hash,
        'Artist_Dyeing' => $Artist_Dyeing,
        'Dyeing_Date' => $Dyeing_Date,
        'farmer_name' => $farmer_name,
        'farm_detail' => $farm_detail,
        'date_of_cleaning' => $date_of_cleaning,
        'date_of_carding' => $Date_of_carding,
    ]);

    // Generate the hash using a hashing algorithm (e.g., SHA-256)
    $hash = hash('sha256', $qrCodeData);

    // Update the hash value in production
    $stmt3 = $connection->prepare("UPDATE production SET production_hash = ? WHERE Transaction_id = ? and Reel_id=?");
    $stmt3->bind_param("ssi", $hash, $Transaction_id, $Reel_id);

    // Execute the statement
    if ($stmt3->execute()) {
        echo "Block details saved successfully.";
    } else {
        echo "Error: " . $stmt3->error;
    }

    // Append the production_hash to the QR code data
    $qrCodeData .= " production hash" . $hash;

    // Generate QR code image file
    $qrCodeFile = 'phpqrcode/fabric_' . $Fabric_id . '.png'; // Path to save the QR code image

    // Generate QR code image file
    QRcode::png($qrCodeData, $qrCodeFile, QR_ECLEVEL_L, 10);

    // Store the QR code in the qr_production table
    $qrCodeContents = file_get_contents($qrCodeFile);
    $qrCodeBase64 = base64_encode($qrCodeContents);

    $stmtQr = $connection->prepare("INSERT INTO qr_production (Transaction_id, Reel_id,Fabric_id, qr_production) VALUES (?, ?, ?,?)");
    $stmtQr->bind_param("iiis", $Transaction_id, $Reel_id, $Fabric_id, $qrCodeBase64);
    $stmtQr->execute();
    $stmtQr->close();

    // Store the reel and transaction information in the fabrics table
    $stmtFabrics = $connection->prepare("INSERT INTO fabrics (Transaction_id, Reel_id,Fabric_id) VALUES (?, ?,?)");
    $stmtFabrics->bind_param("iii", $Transaction_id, $Reel_id, $Fabric_id);
    $stmtFabrics->execute();
    $stmtFabrics->close();
}

// Close the statements and the database connection
$stmtUpdateStatus->close();
$stmt->close();
$connection->close();
?>
