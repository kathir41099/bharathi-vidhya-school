<?php
// File path
$filePath = "assets/files/APPLICATION_FORM.docx";

// Check file exists
if (!file_exists($filePath)) {
    die("File not found.");
}

// Get file info
$fileName = basename($filePath);
$fileSize = filesize($filePath);

// Headers for Word file download
header("Content-Description: File Transfer");
header("Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document");
header("Content-Disposition: attachment; filename=\"$fileName\"");
header("Content-Length: " . $fileSize);
header("Cache-Control: must-revalidate");
header("Pragma: public");
header("Expires: 0");

// Clear output buffer
ob_clean();
flush();

// Read the file
readfile($filePath);
exit;
