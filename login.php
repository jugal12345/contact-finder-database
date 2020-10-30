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

if($alpha=='A'){
  $sql = "INSERT INTO a (name, username, cnumber, password, pic, email)
  VALUES ('$_POST[name]', '$_POST[username]', '$_POST[cnumber]', '$_POST[password]', '$_POST[photo]', '$_POST[email]')";
}
elseif ($alpha=='B') {
  $sql = "INSERT INTO b (name, username, cnumber, password, pic, email)
  VALUES ('$_POST[name]', '$_POST[username]', '$_POST[cnumber]', '$_POST[password]', '$_POST[photo]', '$_POST[email]')";
}
elseif ($alpha=='C') {
  $sql = "INSERT INTO c (name, username, cnumber, password, pic, email)
  VALUES ('$_POST[name]', '$_POST[username]', '$_POST[cnumber]', '$_POST[password]', '$_POST[photo]', '$_POST[email]')";
}
elseif ($alpha=='D') {
  $sql = "INSERT INTO d (name, username, cnumber, password, pic, email)
  VALUES ('$_POST[name]', '$_POST[username]', '$_POST[cnumber]', '$_POST[password]', '$_POST[photo]', '$_POST[email]')";
}
elseif ($alpha=='E') {
  $sql = "INSERT INTO e (name, username, cnumber, password, pic, email)
  VALUES ('$_POST[name]', '$_POST[username]', '$_POST[cnumber]', '$_POST[password]', '$_POST[photo]', '$_POST[email]')";
}
elseif ($alpha=='F') {
  $sql = "INSERT INTO f (name, username, cnumber, password, pic, email)
  VALUES ('$_POST[name]', '$_POST[username]', '$_POST[cnumber]', '$_POST[password]', '$_POST[photo]', '$_POST[email]')";
}
elseif ($alpha=='G') {
  $sql = "INSERT INTO g (name, username, cnumber, password, pic, email)
  VALUES ('$_POST[name]', '$_POST[username]', '$_POST[cnumber]', '$_POST[password]', '$_POST[photo]', '$_POST[email]')";
}
elseif ($alpha=='H') {
  $sql = "INSERT INTO h (name, username, cnumber, password, pic, email)
  VALUES ('$_POST[name]', '$_POST[username]', '$_POST[cnumber]', '$_POST[password]', '$_POST[photo]', '$_POST[email]')";
}
elseif ($alpha=='I') {
  $sql = "INSERT INTO i (name, username, cnumber, password, pic, email)
  VALUES ('$_POST[name]', '$_POST[username]', '$_POST[cnumber]', '$_POST[password]', '$_POST[photo]', '$_POST[email]')";
}
elseif ($alpha=='J') {
  $sql = "INSERT INTO j (name, username, cnumber, password, pic, email)
  VALUES ('$_POST[name]', '$_POST[username]', '$_POST[cnumber]', '$_POST[password]', '$_POST[photo]', '$_POST[email]')";
}
elseif ($alpha=='K') {
  $sql = "INSERT INTO k (name, username, cnumber, password, pic, email)
  VALUES ('$_POST[name]', '$_POST[username]', '$_POST[cnumber]', '$_POST[password]', '$_POST[photo]', '$_POST[email]')";
}
elseif ($alpha=='L') {
  $sql = "INSERT INTO l (name, username, cnumber, password, pic, email)
  VALUES ('$_POST[name]', '$_POST[username]', '$_POST[cnumber]', '$_POST[password]', '$_POST[photo]', '$_POST[email]')";
}
elseif ($alpha=='M') {
  $sql = "INSERT INTO m (name, username, cnumber, password, pic, email)
  VALUES ('$_POST[name]', '$_POST[username]', '$_POST[cnumber]', '$_POST[password]', '$_POST[photo]', '$_POST[email]')";
}
elseif ($alpha=='N') {
  $sql = "INSERT INTO n (name, username, cnumber, password, pic, email)
  VALUES ('$_POST[name]', '$_POST[username]', '$_POST[cnumber]', '$_POST[password]', '$_POST[photo]', '$_POST[email]')";
}
elseif ($alpha=='O') {
  $sql = "INSERT INTO o (name, username, cnumber, password, pic, email)
  VALUES ('$_POST[name]', '$_POST[username]', '$_POST[cnumber]', '$_POST[password]', '$_POST[photo]', '$_POST[email]')";
}
elseif ($alpha=='P') {
  $sql = "INSERT INTO p (name, username, cnumber, password, pic, email)
  VALUES ('$_POST[name]', '$_POST[username]', '$_POST[cnumber]', '$_POST[password]', '$_POST[photo]', '$_POST[email]')";
}
elseif ($alpha=='Q') {
  $sql = "INSERT INTO q (name, username, cnumber, password, pic, email)
  VALUES ('$_POST[name]', '$_POST[username]', '$_POST[cnumber]', '$_POST[password]', '$_POST[photo]', '$_POST[email]')";
}
elseif ($alpha=='R') {
  $sql = "INSERT INTO r (name, username, cnumber, password, pic, email)
  VALUES ('$_POST[name]', '$_POST[username]', '$_POST[cnumber]', '$_POST[password]', '$_POST[photo]', '$_POST[email]')";
}
elseif ($alpha=='S') {
  $sql = "INSERT INTO s (name, username, cnumber, password, pic, email)
  VALUES ('$_POST[name]', '$_POST[username]', '$_POST[cnumber]', '$_POST[password]', '$_POST[photo]', '$_POST[email]')";
}
elseif ($alpha=='T') {
  $sql = "INSERT INTO t (name, username, cnumber, password, pic, email)
  VALUES ('$_POST[name]', '$_POST[username]', '$_POST[cnumber]', '$_POST[password]', '$_POST[photo]', '$_POST[email]')";
}
elseif ($alpha=='U') {
  $sql = "INSERT INTO u (name, username, cnumber, password, pic, email)
  VALUES ('$_POST[name]', '$_POST[username]', '$_POST[cnumber]', '$_POST[password]', '$_POST[photo]', '$_POST[email]')";
}
elseif ($alpha=='V') {
  $sql = "INSERT INTO v (name, username, cnumber, password, pic, email)
  VALUES ('$_POST[name]', '$_POST[username]', '$_POST[cnumber]', '$_POST[password]', '$_POST[photo]', '$_POST[email]')";
}
elseif ($alpha=='W') {
  $sql = "INSERT INTO w (name, username, cnumber, password, pic, email)
  VALUES ('$_POST[name]', '$_POST[username]', '$_POST[cnumber]', '$_POST[password]', '$_POST[photo]', '$_POST[email]')";
}
elseif ($alpha=='X') {
  $sql = "INSERT INTO x (name, username, cnumber, password, pic, email)
  VALUES ('$_POST[name]', '$_POST[username]', '$_POST[cnumber]', '$_POST[password]', '$_POST[photo]', '$_POST[email]')";
}
elseif ($alpha=='Y') {
  $sql = "INSERT INTO y (name, username, cnumber, password, pic, email)
  VALUES ('$_POST[name]', '$_POST[username]', '$_POST[cnumber]', '$_POST[password]', '$_POST[photo]', '$_POST[email]')";
}
elseif ($alpha=='Z') {
  $sql = "INSERT INTO z (name, username, cnumber, password, pic, email)
  VALUES ('$_POST[name]', '$_POST[username]', '$_POST[cnumber]', '$_POST[password]', '$_POST[photo]', '$_POST[email]')";
}
if (mysqli_query($conn, $sql)) {
  echo "<html><head>
  <style>

  body{
    background-color:#f6f5f5;
  }

  .div{
    background-color:#d6e0f0;
    margin: auto;
    width: 40%;
    height: 50%;
    border: 3px solid black;
    padding: 10px;
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
  <h1 style='text-align:center;'>LOGIN</h1><br><br>
  <form action='search.php' method='post'><div class='div'>
  <p>Enter your unique username</p>
  <input type='text' name='username' id='username' required>
  <p>Enter your password</p>
  <input type='password' name='password' id='password' required><BR><br>
  <input type='submit' value='submit' class='submit submit1'></div></form>
  </body></html>";
}
else {
  echo "Kindly go back to signup again. Retry with different credentials.";
  echo "<a href='signup.php'>Click here to retry</a>";
}



mysqli_close($conn);
?>
