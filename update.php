<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contacts";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$flag=0;

$sql="ALTER TABLE a ADD email varchar(255)";
if(mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql="ALTER TABLE b ADD email varchar(255)";
if(mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql="ALTER TABLE c ADD email varchar(255)";
if(mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql="ALTER TABLE d ADD email varchar(255)";
if(mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql="ALTER TABLE e ADD email varchar(255)";
if(mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql="ALTER TABLE f ADD email varchar(255)";
if(mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql="ALTER TABLE g ADD email varchar(255)";
if(mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql="ALTER TABLE h ADD email varchar(255)";
if(mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql="ALTER TABLE i ADD email varchar(255)";
if(mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql="ALTER TABLE j ADD email varchar(255)";
if(mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql="ALTER TABLE k ADD email varchar(255)";
if(mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql="ALTER TABLE l ADD email varchar(255)";
if(mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql="ALTER TABLE m ADD email varchar(255)";
if(mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql="ALTER TABLE n ADD email varchar(255)";
if(mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql="ALTER TABLE o ADD email varchar(255)";
if(mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql="ALTER TABLE p ADD email varchar(255)";
if(mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql="ALTER TABLE q ADD email varchar(255)";
if(mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql="ALTER TABLE r ADD email varchar(255)";
if(mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql="ALTER TABLE s ADD email varchar(255)";
if(mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql="ALTER TABLE t ADD email varchar(255)";
if(mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql="ALTER TABLE u ADD email varchar(255)";
if(mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql="ALTER TABLE v ADD email varchar(255)";
if(mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql="ALTER TABLE w ADD email varchar(255)";
if(mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql="ALTER TABLE x ADD email varchar(255)";
if(mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql="ALTER TABLE y ADD email varchar(255)";
if(mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql="ALTER TABLE z ADD email varchar(255)";
if(mysqli_query($conn, $sql)){
  $flag=$flag+1;
}

if($flag==26){
  echo "Congrats. Don't add queries in the last minute again.";
}

mysqli_close($conn);
?>
