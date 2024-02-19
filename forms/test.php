<?php

$email = $_POST["email"];

$hostname="localhost";
$username="ceuao_ereis";
$password="Elsamaria12!";
$dbname="ceuao_USER";

$conn = mysqli_connect(hostname: $hostname, username: $username, password: $password, database: $dbname);

if(mysqli_connect_errno()){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "INSERT INTO Newslatter (email) VALUES (?)";

$stmt = mysqli_stmt_init($conn);

if( ! mysqli_stmt_prepare($stmt, $sql)){
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "s", $email);

mysqli_stmt_execute($stmt);

echo "Record saved. ";

?>