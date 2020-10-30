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

$alpha=strtoupper(substr($_POST['username'],0,1));
$flag=0;

if ($alpha=='A'){
  $sql = "SELECT name, password, username FROM a WHERE username='$_POST[username]' ";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    $flag=$flag+1;
    while($row = $result->fetch_assoc()){
      $name = $row["name"];
      $user = $row["username"];
    }
  }
}
elseif ($alpha=='B') {
  $sql = "SELECT name, password, username FROM b WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    $flag=$flag+1;
    while($row = $result->fetch_assoc()){
      $name = $row["name"];
      $user = $row["username"];
    }
  }
}
elseif ($alpha=='C') {
  $sql = "SELECT name, password, username FROM c WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    $flag=$flag+1;
    while($row = $result->fetch_assoc()){
      $name = $row["name"];
      $user = $row["username"];
    }
  }
}
elseif ($alpha=='D') {
  $sql = "SELECT name, password, username FROM d WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    $flag=$flag+1;
    while($row = $result->fetch_assoc()){
      $name = $row["name"];
      $user = $row["username"];
    }
  }
}
elseif ($alpha=='E') {
  $sql = "SELECT name, password, username FROM e WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    $flag=$flag+1;
    while($row = $result->fetch_assoc()){
      $name = $row["name"];
      $user = $row["username"];
    }
  }
}
elseif ($alpha=='F') {
  $sql = "SELECT name, password, username FROM f WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    $flag=$flag+1;
    while($row = $result->fetch_assoc()){
      $name = $row["name"];
      $user = $row["username"];
    }
  }
}
elseif ($alpha=='G') {
  $sql = "SELECT name, password, username FROM g WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    $flag=$flag+1;
    while($row = $result->fetch_assoc()){
      $name = $row["name"];
      $user = $row["username"];
    }
  }
}
elseif ($alpha=='H') {
  $sql = "SELECT name, password, username FROM h WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    $flag=$flag+1;
    while($row = $result->fetch_assoc()){
      $name = $row["name"];
      $user = $row["username"];
    }
  }
}
elseif ($alpha=='I') {
  $sql = "SELECT name, password, username FROM i WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    $flag=$flag+1;
    while($row = $result->fetch_assoc()){
      $name = $row["name"];
      $user = $row["username"];
    }
  }
}
elseif ($alpha=='J') {
  $sql = "SELECT name, password, username FROM j WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    $flag=$flag+1;
    while($row = $result->fetch_assoc()){
      $name = $row["name"];
      $user = $row["username"];
    }
  }
}
elseif ($alpha=='K') {
  $sql = "SELECT name, password, username FROM k WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    $flag=$flag+1;
    while($row = $result->fetch_assoc()){
      $name = $row["name"];
      $user = $row["username"];
    }
  }
}
elseif ($alpha=='L') {
  $sql = "SELECT name, password, username FROM l WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    $flag=$flag+1;
    while($row = $result->fetch_assoc()){
      $name = $row["name"];
      $user = $row["username"];
    }
  }
}
elseif ($alpha=='M') {
  $sql = "SELECT name, password, username FROM m WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    $flag=$flag+1;
    while($row = $result->fetch_assoc()){
      $name = $row["name"];
      $user = $row["username"];
    }
  }
}
elseif ($alpha=='N') {
  $sql = "SELECT name, password, username FROM n WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    $flag=$flag+1;
    while($row = $result->fetch_assoc()){
      $name = $row["name"];
      $user = $row["username"];
    }
  }
}
elseif ($alpha=='O') {
  $sql = "SELECT name, password, username FROM o WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    $flag=$flag+1;
    while($row = $result->fetch_assoc()){
      $name = $row["name"];
      $user = $row["username"];
    }
  }
}
elseif ($alpha=='P') {
  $sql = "SELECT name, password, username FROM p WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    $flag=$flag+1;
    while($row = $result->fetch_assoc()){
      $name = $row["name"];
      $user = $row["username"];
    }
  }
}
elseif ($alpha=='Q') {
  $sql = "SELECT name, password, username FROM q WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    $flag=$flag+1;
    while($row = $result->fetch_assoc()){
      $name = $row["name"];
      $user = $row["username"];
    }
  }
}
elseif ($alpha=='R') {
  $sql = "SELECT name, password, username FROM r WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    $flag=$flag+1;
    while($row = $result->fetch_assoc()){
      $name = $row["name"];
      $user = $row["username"];
    }
  }
}
elseif ($alpha=='S') {
  $sql = "SELECT name, password, username FROM s WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    $flag=$flag+1;
    while($row = $result->fetch_assoc()){
      $name = $row["name"];
      $user = $row["username"];
    }
  }
}
elseif ($alpha=='T') {
  $sql = "SELECT name, password, username FROM t WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    $flag=$flag+1;
    while($row = $result->fetch_assoc()){
      $name = $row["name"];
      $user = $row["username"];
    }
  }
}
elseif ($alpha=='U') {
  $sql = "SELECT name, password, username FROM u WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    $flag=$flag+1;
    while($row = $result->fetch_assoc()){
      $name = $row["name"];
      $user = $row["username"];
    }
  }
}
elseif ($alpha=='V') {
  $sql = "SELECT name, password, username FROM v WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    $flag=$flag+1;
    while($row = $result->fetch_assoc()){
      $name = $row["name"];
      $user = $row["username"];
    }
  }
}
elseif ($alpha=='W') {
  $sql = "SELECT name, password, username FROM w WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    $flag=$flag+1;
    while($row = $result->fetch_assoc()){
      $name = $row["name"];
      $user = $row["username"];
    }
  }
}
elseif ($alpha=='X') {
  $sql = "SELECT name, password, username FROM x WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    $flag=$flag+1;
    while($row = $result->fetch_assoc()){
      $name = $row["name"];
      $user = $row["username"];
    }
  }
}
elseif ($alpha=='Y') {
  $sql = "SELECT name, password, username FROM y WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    $flag=$flag+1;
    while($row = $result->fetch_assoc()){
      $name = $row["name"];
      $user = $row["username"];
    }
  }
}
elseif ($alpha=='Z') {
  $sql = "SELECT name, password, username FROM z WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    $flag=$flag+1;
    while($row = $result->fetch_assoc()){
      $name = $row["name"];
      $user = $row["username"];
    }
  }
}

if($flag==1){
  echo "<p style='font-size:25px;'></p>";
  echo "<html>
  <head>

    <style>

    body{
      background-color:#f6f5f5;
    }

    .div{
      background-color:#d6e0f0;
      margin: auto;
      width: 40%;
      height: 30%;
      border: 3px solid black;
      padding: 10px;
      text-align:center;
      font-size:20px;
    }

    p{
      color:#393b44;
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

    input[type=text] {
      width: 69%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      border: solid 1px black;
      background-color: #f1f3f8;
      color: black;
    }

    input[type=password] {
      width: 69%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      border: solid 1px black;
      background-color: #f1f3f8;
      color: black;
    }

    p{
      color:#393b44;
    }

    </style>


  </head><body>
    <h1 style='text-align:center;'>Search</h1>
  <form action='output.php' method='post'><div class='div'>

    <p style='font-size:25px;'>Welcome $name, Enter the username you want to contact</p>
    <input type='hidden' name='mname' id='mname' value='$user' readonly required>
    <input type='text' name='username' id='username' required><br><br>
    <input type='submit' value='SEARCH' class='submit submit1'>
  </div></form>

  <form action='viewer.php' method='post'><div class='div'>

    <p style='font-size:25px;'>VIEW HOW MANY PEOPLE VIEWED YOUR PROFILE</p>
    <input type='hidden' name='mname' id='mname' value='$user' readonly required>
    <input type='submit' value='VIEW' class='submit submit1'>
  </div></form>

<form

";
}
else{
  echo "Kindly get back to the login page and enter valid credentials";
  echo "<a href='login.html>Go to login page</a>'";
}
mysqli_close($conn);
?>
