<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lms";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$password = $_POST["password"];

$sql = "UPDATE admin SET password='$password' WHERE id=1";
if (mysqli_query($conn, $sql)) {
    header("Location: ../admin/changePassword.php");
        exit;
} else {
    echo "Error updating profile: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
