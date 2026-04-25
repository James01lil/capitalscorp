<?php
// Enable full error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
include 'db2.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
  die("Unauthorized access");
}

$user_id = $_SESSION['user_id'];
$full_name = $_POST['full_name'] ?? '';
$dob = $_POST['dob'] ?? '';

// Setup upload
$upload_dir = 'kyc_documents/';
$allowed_ext = ['jpg', 'jpeg', 'png', 'pdf'];

// Auto-create upload folder if missing
if (!is_dir($upload_dir)) {
  mkdir($upload_dir, 0777, true);
}

// Helper function to save file
function saveFile($file, $prefix, $upload_dir, $allowed_ext) {
  if (!isset($file) || $file['error'] !== 0) {
    die("File upload error: " . $file['error']);
  }

  $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
  if (!in_array($ext, $allowed_ext)) {
    die("Invalid file type: .$ext");
  }

  $filename = $prefix . '_' . uniqid() . '.' . $ext;
  $destination = $upload_dir . $filename;

  if (!move_uploaded_file($file['tmp_name'], $destination)) {
    die("Failed to move uploaded file: $prefix");
  }

  return $filename;
}

// Save uploaded files
$id_front = saveFile($_FILES['id_front'], 'front', $upload_dir, $allowed_ext);
$id_back  = saveFile($_FILES['id_back'], 'back', $upload_dir, $allowed_ext);
$selfie   = saveFile($_FILES['selfie'], 'selfie', $upload_dir, $allowed_ext);

// Debug: show values
/*
echo "Full Name: $full_name<br>";
echo "DOB: $dob<br>";
echo "ID Front: $id_front<br>";
echo "ID Back: $id_back<br>";
echo "Selfie: $selfie<br>";
*/

// Prepare and execute insert query
$stmt = $conn->prepare("INSERT INTO kyc_submissions (user_id, full_name, dob, id_front, id_back, selfie) VALUES (?, ?, ?, ?, ?, ?)");

if (!$stmt) {
  die("Prepare failed: " . $conn->error);
}

$stmt->bind_param("isssss", $user_id, $full_name, $dob, $id_front, $id_back, $selfie);

if (!$stmt->execute()) {
  die("Execute failed: " . $stmt->error);
} else {
  echo "✅ KYC submitted successfully.";
}





// Email settings
$to = "wsamson630@gmail.com"; // <-- change this to your own email address
$subject = "New KYC Submission: $full_name";
$body = "A new KYC has been submitted by:\n\nFull Name: $full_name\nDate of Birth: $dob\n\nFiles are attached.";
$from = "kyc@capitalscorp.online"; // <-- change this to your actual server sender email
$headers = "From: $from";

// File paths
$attachments = [
    $upload_dir . $id_front,
    $upload_dir . $id_back,
    $upload_dir . $selfie,
];

// Generate MIME email with attachments
$boundary = md5(time());
$headers .= "\r\nMIME-Version: 1.0";
$headers .= "\r\nContent-Type: multipart/mixed; boundary=\"{$boundary}\"";

$message = "--{$boundary}\r\n";
$message .= "Content-Type: text/plain; charset=\"utf-8\"\r\n";
$message .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
$message .= $body . "\r\n\r\n";

foreach ($attachments as $path) {
    if (file_exists($path)) {
        $filename = basename($path);
        $filedata = chunk_split(base64_encode(file_get_contents($path)));
        $message .= "--{$boundary}\r\n";
        $message .= "Content-Type: application/octet-stream; name=\"{$filename}\"\r\n";
        $message .= "Content-Transfer-Encoding: base64\r\n";
        $message .= "Content-Disposition: attachment; filename=\"{$filename}\"\r\n\r\n";
        $message .= $filedata . "\r\n\r\n";
    }
}

$message .= "--{$boundary}--";

// Send the email
if (mail($to, $subject, $message, $headers)) {
    echo "<br>📩 Email sent to $to.";
} else {
    echo "<br>❌ Failed to send email.";
}


?>