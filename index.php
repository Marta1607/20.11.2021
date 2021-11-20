<?php
$nowa = "samolocik";
$dwa = 'se lata';
echo $nowa. ' '.$dwa ;

$host = "localhost";
$user = "root";
$password = "";
$dbname = 'szkola';
$con = mysqli_connect($host, $user, $password );
if(!$con) {
    echo 'nie połączono';
}
mysqli_select_db($con, $dbname);

$query = "SELECT * FROM `uczen`";
$result = mysqli_query($con, $query);
foreach($result as $uczen) {
    echo "<p style = color:blue>" .$uczen['imie'] ."<p>";
    echo "<p style = color:red>" .$uczen['nazwisko'] ."<p>";    
}

$host = "localhost";
$user = "root";
$password = "";
$dbname = 'nowa';
$con = mysqli_connect($host, $user, $password );
if(!$con) {
    echo 'nie połączono';
}
mysqli_select_db($con, $dbname);

$query = "SELECT * FROM `baza`";
$result = mysqli_query($con, $query);
foreach($result as $baza) {
    echo "<h2 style=color:blue >" .$baza['imie'] ."<h2 style=background-color:red>";
    echo "<h1 style = color:hotpink>" .$baza['nazwisko'] ."<h1>";    
}
?>