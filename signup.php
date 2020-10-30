<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contacts";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$flag=0;
// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS a (
username VARCHAR(20) PRIMARY KEY,
name VARCHAR(30) NOT NULL,
cnumber VARCHAR(50) NOT NULL,
password VARCHAR(15) NOT NULL
)";
if (mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql = "CREATE TABLE IF NOT EXISTS b (
username VARCHAR(20) PRIMARY KEY,
name VARCHAR(30) NOT NULL,
cnumber VARCHAR(50) NOT NULL,
password VARCHAR(15) NOT NULL
)";
if (mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql = "CREATE TABLE IF NOT EXISTS c (
username VARCHAR(20) PRIMARY KEY,
name VARCHAR(30) NOT NULL,
cnumber VARCHAR(50) NOT NULL,
password VARCHAR(15) NOT NULL
)";
if (mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql = "CREATE TABLE IF NOT EXISTS d (
username VARCHAR(20) PRIMARY KEY,
name VARCHAR(30) NOT NULL,
cnumber VARCHAR(50) NOT NULL,
password VARCHAR(15) NOT NULL
)";
if (mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql = "CREATE TABLE IF NOT EXISTS e (
username VARCHAR(20) PRIMARY KEY,
name VARCHAR(30) NOT NULL,
cnumber VARCHAR(50) NOT NULL,
password VARCHAR(15) NOT NULL
)";
if (mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql = "CREATE TABLE IF NOT EXISTS f (
username VARCHAR(20) PRIMARY KEY,
name VARCHAR(30) NOT NULL,
cnumber VARCHAR(50) NOT NULL,
password VARCHAR(15) NOT NULL
)";
if (mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql = "CREATE TABLE IF NOT EXISTS g (
username VARCHAR(20) PRIMARY KEY,
name VARCHAR(30) NOT NULL,
cnumber VARCHAR(50) NOT NULL,
password VARCHAR(15) NOT NULL
)";
if (mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql = "CREATE TABLE IF NOT EXISTS h (
username VARCHAR(20) PRIMARY KEY,
name VARCHAR(30) NOT NULL,
cnumber VARCHAR(50) NOT NULL,
password VARCHAR(15) NOT NULL
)";
if (mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql = "CREATE TABLE IF NOT EXISTS i (
username VARCHAR(20) PRIMARY KEY,
name VARCHAR(30) NOT NULL,
cnumber VARCHAR(50) NOT NULL,
password VARCHAR(15) NOT NULL
)";
if (mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql = "CREATE TABLE IF NOT EXISTS j (
username VARCHAR(20) PRIMARY KEY,
name VARCHAR(30) NOT NULL,
cnumber VARCHAR(50) NOT NULL,
password VARCHAR(15) NOT NULL
)";
if (mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql = "CREATE TABLE IF NOT EXISTS k (
username VARCHAR(20) PRIMARY KEY,
name VARCHAR(30) NOT NULL,
cnumber VARCHAR(50) NOT NULL,
password VARCHAR(15) NOT NULL
)";
if (mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql = "CREATE TABLE IF NOT EXISTS l (
username VARCHAR(20) PRIMARY KEY,
name VARCHAR(30) NOT NULL,
cnumber VARCHAR(50) NOT NULL,
password VARCHAR(15) NOT NULL
)";
if (mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql = "CREATE TABLE IF NOT EXISTS m (
username VARCHAR(20) PRIMARY KEY,
name VARCHAR(30) NOT NULL,
cnumber VARCHAR(50) NOT NULL,
password VARCHAR(15) NOT NULL
)";
if (mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql = "CREATE TABLE IF NOT EXISTS n (
username VARCHAR(20) PRIMARY KEY,
name VARCHAR(30) NOT NULL,
cnumber VARCHAR(50) NOT NULL,
password VARCHAR(15) NOT NULL
)";
if (mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql = "CREATE TABLE IF NOT EXISTS o (
username VARCHAR(20) PRIMARY KEY,
name VARCHAR(30) NOT NULL,
cnumber VARCHAR(50) NOT NULL,
password VARCHAR(15) NOT NULL
)";
if (mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql = "CREATE TABLE IF NOT EXISTS p (
username VARCHAR(20) PRIMARY KEY,
name VARCHAR(30) NOT NULL,
cnumber VARCHAR(50) NOT NULL,
password VARCHAR(15) NOT NULL
)";
if (mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql = "CREATE TABLE IF NOT EXISTS q (
username VARCHAR(20) PRIMARY KEY,
name VARCHAR(30) NOT NULL,
cnumber VARCHAR(50) NOT NULL,
password VARCHAR(15) NOT NULL
)";
if (mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql = "CREATE TABLE IF NOT EXISTS r (
username VARCHAR(20) PRIMARY KEY,
name VARCHAR(30) NOT NULL,
cnumber VARCHAR(50) NOT NULL,
password VARCHAR(15) NOT NULL
)";
if (mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql = "CREATE TABLE IF NOT EXISTS s (
username VARCHAR(20) PRIMARY KEY,
name VARCHAR(30) NOT NULL,
cnumber VARCHAR(50) NOT NULL,
password VARCHAR(15) NOT NULL
)";
if (mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql = "CREATE TABLE IF NOT EXISTS t(
username VARCHAR(20) PRIMARY KEY,
name VARCHAR(30) NOT NULL,
cnumber VARCHAR(50) NOT NULL,
password VARCHAR(15) NOT NULL
)";
if (mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql = "CREATE TABLE IF NOT EXISTS u (
username VARCHAR(20) PRIMARY KEY,
name VARCHAR(30) NOT NULL,
cnumber VARCHAR(50) NOT NULL,
password VARCHAR(15) NOT NULL
)";
if (mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql = "CREATE TABLE IF NOT EXISTS v (
username VARCHAR(20) PRIMARY KEY,
name VARCHAR(30) NOT NULL,
cnumber VARCHAR(50) NOT NULL,
password VARCHAR(15) NOT NULL
)";
if (mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql = "CREATE TABLE IF NOT EXISTS w (
username VARCHAR(20) PRIMARY KEY,
name VARCHAR(30) NOT NULL,
cnumber VARCHAR(50) NOT NULL,
password VARCHAR(15) NOT NULL
)";
if (mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql = "CREATE TABLE IF NOT EXISTS x (
username VARCHAR(20) PRIMARY KEY,
name VARCHAR(30) NOT NULL,
cnumber VARCHAR(50) NOT NULL,
password VARCHAR(15) NOT NULL
)";
if (mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql = "CREATE TABLE IF NOT EXISTS y (
username VARCHAR(20) PRIMARY KEY,
name VARCHAR(30) NOT NULL,
cnumber VARCHAR(50) NOT NULL,
password VARCHAR(15) NOT NULL
)";
if (mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
$sql = "CREATE TABLE IF NOT EXISTS z (
username VARCHAR(20) PRIMARY KEY,
name VARCHAR(30) NOT NULL,
cnumber VARCHAR(50) NOT NULL,
password VARCHAR(15) NOT NULL
)";
if (mysqli_query($conn, $sql)){
  $flag=$flag+1;
}
if ($flag==26) {
  echo "<html><head><script>
  function check(inputtxt)
    {
     var letters = /^[A-Za-z]+$/;
     if(inputtxt.value.substr(0,1).match(letters))
       {
        return true;
       }
     else
       {
       alert('Start with an alphabet');
       return false;
       }
    }

</script>

<script>
    function myfunction(inputtxt) {



      var str2='vitstudent.ac.in';
      var n = inputtxt.value.substr(-16).localeCompare(str2);
      if(n==1 || n==-1)
      {
      alert('please enter VIT email-id');
      }
    }


  </script>
<style>
  body{
    background-color:#f6f5f5;
  }

  .div{
    background-color:#d6e0f0;
    margin: auto;
    width: 40%;
    height: 95%;
    border: 3px solid black;
    text-align:center;
    font-size:20px;
  }

  img{
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 250px;
  }

  button{
    background-color: #8d93ab;
    border: none;
    color: white;
    padding: 25px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    color:#000000;
    width:40%;
    border-radius: 12px;
  }

  h1{
    color:#393b44;
    font-size:90px;
    margin:0;
  }

  button:hover{
    background-color:black;
    color:white;
  }

  .submit {
    background-color: #8d93ab; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
    border-radius: 12px;
  }

  .submit1{
    background-color: white;
  color: black;
  border: 2px solid #8d93ab;
  }

  .submit1:hover {
    background-color: #8d93ab;
  color: white;
  }

  input[type=text, email, password] {
    width: 69%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: solid 1px black;
    background-color: #f1f3f8;
    color: black;
  }
  input[type=file] {
    width: 39%;
    padding: 12px 20px;
    margin-left: 44.6969px;


    background-color: #d6e0f0;
    color: black;
  }

  p{
    color:#393b44;
  }

  </style>




  </head><body>
  <h1 style='text-align:center'>SIGNUP</h1><br><br><br>
  <form action='login.php' method='post' name='f1' id='f1'><div class='div'>
    <p>Enter your name:</p>
    <input type='text' name='name' id='name' required>
    <p>Enter your mail-ID:</p>
    <input type='text' name='email' id='email' required onblur='myfunction(document.f1.email)'>
    <p>Enter your unique username</p>
    <input type='text' name='username' id='username' required onblur='check(document.f1.username)'>
    <p>Enter your contact number:</p>
    <input type='text' name='cnumber' id='cnumber' required>
    <p>Enter your password:</p>
    <input type='password' name='password' id='password' required>
    <p>Upload your photo</p>
    <input type='file' name='photo' id='photo' required><br><br>
    <input type='submit' name='submit' id='submit' class='submit submit1'>
  </div></form><br><br><br><br><Br><br>
  </body></html>";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
