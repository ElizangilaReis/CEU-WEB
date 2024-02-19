<?php

$Email = ($_POST["email"]);

$hostname="Localhost";
$username="ceuao_ereis";
$password="Elsamaria12!";
$dbname="ceuao_USER";
$usertable="Newslatter";

$link = mysqli_connect($hostname, $username, $password, $dbname);

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "INSERT INTO $usertable (email) VALUES ('$Email')";

if(mysqli_query($link, $sql)){

    echo "Records added successfully.";

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($$link);

}

mysqli_close($link);
?>