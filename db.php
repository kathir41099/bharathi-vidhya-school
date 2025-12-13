<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) {
    $conn = null; // allow code to run without DB
    return;
}

$host = "localhost"; // Hostinger uses localhost, not 127.0.0.1
$username = "u682341828_bharathi"; // your Hostinger DB username
$password = "Bharathi_123_!@#$%"; // your DB password
$dbname = "u682341828_bharathi_sch"; // your DB name

$conn = new mysqli($host, $username, $password, $dbname);