<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lms";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST["name"];
$email = $_POST["email"];

$sql = "UPDATE users SET name='$name', email='$email' WHERE id=1";
if (mysqli_query($conn, $sql)) {
    header("Location: edit_profile.php");
        exit;
} else {
    echo "Error updating profile: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
