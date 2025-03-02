<?php
include 'db_connect.php';
require 'assets/barcode/vendor/autoload.php';

// Extracting data from POST
$ids = $_POST['ids'] ?? '';  // Prevent undefined variable warnings
$tbl = $_POST['tbl'] ?? '';

// Validate input (to prevent SQL injection)
$ids = implode(',', array_map('intval', explode(',', $ids)));  // Sanitize IDs

$generator = new Picqer\Barcode\BarcodeGeneratorPNG();
$stmt = $conn->prepare("SELECT * FROM $tbl WHERE id IN ($ids)");
$stmt->execute();
$qry = $stmt->get_result();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barcode Generator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        #bcode-field {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        #bcode {
            width: 100%;
            max-width: 400px;
            height: auto;
        }
        #bcode-label {
            font-weight: 700;
            font-size: 17px;
            margin-top: 5px;
        }
        .print-btn {
            margin: 20px;
            padding: 10px 20px;
            background: #28a745;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        .print-btn:hover {
            background: #218838;
        }
        @media print {
            .print-btn {
                display: none;
            }
        }
    </style>
</head>
<body>

<div class="container-fluid" id="toPrint">
    <div id="bcode-field">
        <?php while ($row = $qry->fetch_assoc()): ?>
            <img id="bcode" src="data:image/png;base64,<?php echo base64_encode($generator->getBarcode($row['id_no'], "C128")) ?>" alt="Barcode">
            <div id="bcode-label"><?php echo preg_replace('/([0-9])/s', '$1 ', $row['id_no']); ?></div>
            <hr>
        <?php endwhile; ?>
    </div>
</div>

<button class="print-btn" onclick="window.print()">🖨 Print Barcodes</button>

</body>
</html>
