<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contacts";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$alpha=strtoupper(substr($_POST['username'],0,1));
$flag=0;

echo "<style>

body{

    margin:31.567px;
  background-color:#f1f6f9;
  text-align:center;
}

input{
  background-color:#f1f6f9;
  border:0px;
  font-size:29px;
  color:#14274e;
  text-align:center;
  width:50%;
}

img{
  background-color:#f1f6f9;
}

.submit {
  background-color: #394867;
border: none;
color: white;
padding: 16px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
margin: 4px 20px;
transition-duration: 0.4s;
cursor: pointer;
  border-radius: 12px;
  width:190px;
}

.submit1{
  background-color: white;
color: black;
border: 2px solid #394867;
}

.submit1:hover {
  background-color: #394867;
color: white;
}

.m:hover{
  color:red;
}

</style>";

if ($alpha=='A'){
  $sql = "SELECT name, cnumber, pic, email FROM a WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    while($row = $result->fetch_assoc()){
      echo "<html><head>
      </head><body>
      <form>
      <input type='text' value='$row[name]' readonly><br><br>
      <a href='mailto:$row[email]'><input type='text' value='$row[email]' readonly class='m'></a><br><br>
      <input type='text' value='$row[cnumber]' readonly>
      </form>

      <br><br>
      <img src =\"$row[pic]\" width=250px />
      </body></html>";
      $flag=1;
    }
  }
}
elseif ($alpha=='B') {
  $sql = "SELECT name, cnumber, pic, email FROM b WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    while($row = $result->fetch_assoc()){
      echo "<html><head></head><body>
      <form>
      <input type='text' value='$row[name]' readonly><br><br>
      <a href='mailto:$row[email]'><input type='text' value='$row[email]' readonly class='m'></a><br><br>
      <input type='text' value='$row[cnumber]' readonly>
      </form>

      <br><br>
      <img src =\"$row[pic]\" width=250px />
      </body></html>";
      $flag=1;
    }
  }
}
elseif ($alpha=='C') {
  $sql = "SELECT name, cnumber, pic, email FROM c WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    while($row = $result->fetch_assoc()){
      echo "<html><head></head><body>
      <form>
      <input type='text' value='$row[name]' readonly><br><br>
      <a href='mailto:$row[email]'><input type='text' value='$row[email]' readonly class='m'></a><br><br>
      <input type='text' value='$row[cnumber]' readonly>
      </form>

      <br><br>
      <img src =\"$row[pic]\" width=250px />
      </body></html>";
      $flag=1;
    }
  }
}
elseif ($alpha=='D') {
  $sql = "SELECT name, cnumber, pic, email FROM d WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    while($row = $result->fetch_assoc()){
      echo "<html><head></head><body>
      <form>
      <input type='text' value='$row[name]' readonly><br><br>
      <a href='mailto:$row[email]'><input type='text' value='$row[email]' readonly class='m'></a><br><br>
      <input type='text' value='$row[cnumber]' readonly>
      </form>

      <br><br>
      <img src =\"$row[pic]\" width=250px />
      </body></html>";
      $flag=1;
    }
  }
}
elseif ($alpha=='E') {
  $sql = "SELECT name, cnumber, pic, email FROM e WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    while($row = $result->fetch_assoc()){
      echo "<html><head></head><body>
      <form>
      <input type='text' value='$row[name]' readonly><br><br>
      <a href='mailto:$row[email]'><input type='text' value='$row[email]' readonly class='m'></a><br><br>
      <input type='text' value='$row[cnumber]' readonly>
      </form>

      <br><br>
      <img src =\"$row[pic]\" width=250px />
      </body></html>";
      $flag=1;
    }
  }
}
elseif ($alpha=='F') {
  $sql = "SELECT name, cnumber, pic, email FROM f WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    while($row = $result->fetch_assoc()){
      echo "<html><head></head><body>
      <form>
      <input type='text' value='$row[name]' readonly><br><br>
      <a href='mailto:$row[email]'><input type='text' value='$row[email]' readonly class='m'></a><br><br>
      <input type='text' value='$row[cnumber]' readonly>
      </form>

      <br><br>
      <img src =\"$row[pic]\" width=250px />
      </body></html>";
      $flag=1;
    }
  }
}
elseif ($alpha=='G') {
  $sql = "SELECT name, cnumber, pic, email FROM g WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    while($row = $result->fetch_assoc()){
      echo "<html><head></head><body>
      <form>
      <input type='text' value='$row[name]' readonly><br><br>
      <a href='mailto:$row[email]'><input type='text' value='$row[email]' readonly class='m'></a><br><br>
      <input type='text' value='$row[cnumber]' readonly>
      </form>

      <br><br>
      <img src =\"$row[pic]\" width=250px />
      </body></html>";
      $flag=1;
    }
  }
}
elseif ($alpha=='H') {
  $sql = "SELECT name, cnumber, pic, email FROM h WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    while($row = $result->fetch_assoc()){
      echo "<html><head></head><body>
      <form>
      <input type='text' value='$row[name]' readonly><br><br>
      <a href='mailto:$row[email]'><input type='text' value='$row[email]' readonly class='m'></a><br><br>
      <input type='text' value='$row[cnumber]' readonly>
      </form>

      <br><br>
      <img src =\"$row[pic]\" width=250px />
      </body></html>";
      $flag=1;
    }
  }
}
elseif ($alpha=='I') {
  $sql = "SELECT name, cnumber, pic, email FROM i WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    while($row = $result->fetch_assoc()){
      echo "<html><head></head><body>
      <form>
      <input type='text' value='$row[name]' readonly><br><br>
      <a href='mailto:$row[email]'><input type='text' value='$row[email]' readonly class='m'></a><br><br>
      <input type='text' value='$row[cnumber]' readonly>
      </form>

      <br><br>
      <img src =\"$row[pic]\" width=250px />
      </body></html>";
      $flag=1;
    }
  }
}
elseif ($alpha=='J') {
  $sql = "SELECT name, cnumber, pic, email FROM j WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    while($row = $result->fetch_assoc()){
      echo "<html><head></head><body>
      <form>
      <input type='text' value='$row[name]' readonly><br><br>
      <a href='mailto:$row[email]'><input type='text' value='$row[email]' readonly class='m'></a><br><br>
      <input type='text' value='$row[cnumber]' readonly>
      </form>
      <br><br>
      <img src =\"$row[pic]\" width=250px />
      </body></html>";
      $flag=1;
    }
  }
}
elseif ($alpha=='K') {
  $sql = "SELECT name, cnumber, pic, email FROM k WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    while($row = $result->fetch_assoc()){
      echo "<html><head></head><body>
      <form>
      <input type='text' value='$row[name]' readonly><br><br>
      <a href='mailto:$row[email]'><input type='text' value='$row[email]' readonly class='m'></a><br><br>
      <input type='text' value='$row[cnumber]' readonly>
      </form>

      <br><br>
      <img src =\"$row[pic]\" width=250px />
      </body></html>";
      $flag=1;
    }
  }
}
elseif ($alpha=='L') {
  $sql = "SELECT name, cnumber, pic, email FROM l WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    while($row = $result->fetch_assoc()){
      echo "<html><head></head><body>
      <form>
      <input type='text' value='$row[name]' readonly><br><br>
      <a href='mailto:$row[email]'><input type='text' value='$row[email]' readonly class='m'></a><br><br>
      <input type='text' value='$row[cnumber]' readonly>
      </form>

      <br><br>
      <img src =\"$row[pic]\" width=250px />
      </body></html>";
      $flag=1;
    }
  }
}
elseif ($alpha=='M') {
  $sql = "SELECT name, cnumber, pic, email FROM m WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    while($row = $result->fetch_assoc()){
      echo "<html><head></head><body>
      <form>
      <input type='text' value='$row[name]' readonly><br><br>
      <a href='mailto:$row[email]'><input type='text' value='$row[email]' readonly class='m'></a><br><br>
      <input type='text' value='$row[cnumber]' readonly>
      </form>

      <br><br>
      <img src =\"$row[pic]\" width=250px />
      </body></html>";
      $flag=1;
    }
  }
}
elseif ($alpha=='N') {
  $sql = "SELECT name, cnumber, pic, email FROM n WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    while($row = $result->fetch_assoc()){
      echo "<html><head></head><body>
      <form>
      <input type='text' value='$row[name]' readonly><br><br>
      <a href='mailto:$row[email]'><input type='text' value='$row[email]' readonly class='m'></a><br><br>
      <input type='text' value='$row[cnumber]' readonly>
      </form>

      <br><br>
      <img src =\"$row[pic]\" width=250px />
      </body></html>";
      $flag=1;
    }
  }
}
elseif ($alpha=='O') {
  $sql = "SELECT name, cnumber, pic, email FROM o WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    while($row = $result->fetch_assoc()){
      echo "<html><head></head><body>
      <form>
      <input type='text' value='$row[name]' readonly><br><br>
      <a href='mailto:$row[email]'><input type='text' value='$row[email]' readonly class='m'></a><br><br>
      <input type='text' value='$row[cnumber]' readonly>
      </form>

      <br><br>
      <img src =\"$row[pic]\" width=250px />
      </body></html>";
      $flag=1;
    }
  }
}
elseif ($alpha=='P') {
  $sql = "SELECT name, cnumber, pic, email FROM p WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    while($row = $result->fetch_assoc()){
      echo "<html><head></head><body>
      <form>
      <input type='text' value='$row[name]' readonly><br><br>
      <a href='mailto:$row[email]'><input type='text' value='$row[email]' readonly class='m'></a><br><br>
      <input type='text' value='$row[cnumber]' readonly>
      </form>

      <br><br>
      <img src =\"$row[pic]\" width=250px />
      </body></html>";
      $flag=1;
    }
  }
}
elseif ($alpha=='Q') {
  $sql = "SELECT name, cnumber, pic, email FROM q WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    while($row = $result->fetch_assoc()){
      echo "<html><head></head><body>
      <form>
      <input type='text' value='$row[name]' readonly><br><br>
      <a href='mailto:$row[email]'><input type='text' value='$row[email]' readonly class='m'></a><br><br>
      <input type='text' value='$row[cnumber]' readonly>
      </form>

      <br><br>
      <img src =\"$row[pic]\" width=250px />
      </body></html>";
      $flag=1;
    }
  }
}
elseif ($alpha=='R') {
  $sql = "SELECT name, cnumber, pic, email FROM r WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    while($row = $result->fetch_assoc()){
      echo "<html><head></head><body>
      <form>
      <input type='text' value='$row[name]' readonly><br><br>
      <a href='mailto:$row[email]'><input type='text' value='$row[email]' readonly class='m'></a><br><br>
      <input type='text' value='$row[cnumber]' readonly>
      </form>

      <br><br>
      <img src =\"$row[pic]\" width=250px />
      </body></html>";
      $flag=1;
    }
  }
}
elseif ($alpha=='S') {
  $sql = "SELECT name, cnumber, pic, email FROM s WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    while($row = $result->fetch_assoc()){
      echo "<html><head></head><body>
      <form>
      <input type='text' value='$row[name]' readonly><br><br>
      <a href='mailto:$row[email]'><input type='text' value='$row[email]' readonly class='m'></a><br><br>
      <input type='text' value='$row[cnumber]' readonly>
      </form>

      <br><br>
      <img src =\"$row[pic]\" width=250px />
      </body></html>";
      $flag=1;
    }
  }
}
elseif ($alpha=='T') {
  $sql = "SELECT name, cnumber, pic, email FROM t WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    while($row = $result->fetch_assoc()){
      echo "<html><head></head><body>
      <form>
      <input type='text' value='$row[name]' readonly><br><br>
      <a href='mailto:$row[email]'><input type='text' value='$row[email]' readonly class='m'></a><br><br>
      <input type='text' value='$row[cnumber]' readonly>
      </form>

      <br><br>
      <img src ='$row[pic]' width=250px />
      </body></html>";
      $flag=1;
    }
  }
}
elseif ($alpha=='U') {
  $sql = "SELECT name, cnumber, pic, email FROM u WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    while($row = $result->fetch_assoc()){
      echo "<html><head></head><body>
      <form>
      <input type='text' value='$row[name]' readonly><br><br>
      <a href='mailto:$row[email]'><input type='text' value='$row[email]' readonly class='m'></a><br><br>
      <input type='text' value='$row[cnumber]' readonly>
      </form>

      <br><br>
      <img src =\"$row[pic]\" width=250px />
      </body></html>";
      $flag=1;
    }
  }
}
elseif ($alpha=='V') {
  $sql = "SELECT name, cnumber, pic, email FROM v WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    while($row = $result->fetch_assoc()){
      echo "<html><head></head><body>
      <form>
      <input type='text' value='$row[name]' readonly><br><br>
      <a href='mailto:$row[email]'><input type='text' value='$row[email]' readonly class='m'></a><br><br>
      <input type='text' value='$row[cnumber]' readonly>
      </form>

      <br><br>
      <img src =\"$row[pic]\" width=250px />
      </body></html>";
      $flag=1;
    }
  }
}
elseif ($alpha=='W') {
  $sql = "SELECT name, cnumber, pic, email FROM w WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    while($row = $result->fetch_assoc()){
      echo "<html><head></head><body>
      <form>
      <input type='text' value='$row[name]' readonly><br><br>
      <a href='mailto:$row[email]'><input type='text' value='$row[email]' readonly class='m'></a><br><br>
      <input type='text' value='$row[cnumber]' readonly>
      </form>

      <br><br>
      <img src =\"$row[pic]\" width=250px />
      </body></html>";
      $flag=1;
    }
  }
}
elseif ($alpha=='X') {
  $sql = "SELECT name, cnumber, pic, email FROM x WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    while($row = $result->fetch_assoc()){
      echo "<html><head></head><body>
      <form>
      <input type='text' value='$row[name]' readonly><br><br>
      <a href='mailto:$row[email]'><input type='text' value='$row[email]' readonly class='m'></a><br><br>
      <input type='text' value='$row[cnumber]' readonly>
      </form>

      <br><br>
      <img src =\"$row[pic]\" width=250px />
      </body></html>";
      $flag=1;
    }
  }
}
elseif ($alpha=='Y') {
  $sql = "SELECT name, cnumber, pic, email FROM y WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    while($row = $result->fetch_assoc()){
      echo "<html><head></head><body>
      <form>
      <input type='text' value='$row[name]' readonly><br><br>
      <a href='mailto:$row[email]'><input type='text' value='$row[email]' readonly class='m'></a><br><br>
      <input type='text' value='$row[cnumber]' readonly>
      </form>

      <br><br>
      <img src =\"$row[pic]\" width=250px />
      </body></html>";
      $flag=1;
    }
  }
}
elseif ($alpha=='Z') {
  $sql = "SELECT name, cnumber, pic, email FROM z WHERE username='$_POST[username]'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result)>0){
    while($row = $result->fetch_assoc()){
      echo "<html><head></head><body>
      <form>
      <input type='text' value='$row[name]' readonly><br><br>
      <a href='mailto:$row[email]'><input type='text' value='$row[email]' readonly class='m'></a><br><br>
      <input type='text' value='$row[cnumber]' readonly>
      </form>

      <br><br>
      <img src ='$row[pic]' width=250px />
      </body></html>";
      $flag=1;
    }
  }
}

if($flag==1){
    $sql="INSERT INTO viewer (username, name)
    VALUES ('$_POST[username]', '$_POST[mname]')";
    if(mysqli_query($con, $sql)){
      echo "<html><head></head><body>
      <form action='search1.php' method='post'>
      <input type='hidden' name='username' id='username' value='$_POST[mname]' readonly required><br><br>
      <input type='submit' value='SEARCH MORE'></form></body>

      ";

    echo "<a href='index.php'><button class='submit submit1'> LOGOUT </button></a>";}
}
else{
  echo "<html><head></head><body>
  <form action='search1.php' method='post'>
  <input type='hidden' name='username' id='username' value='$_POST[mname]' readonly required><br><br>
  <input type='submit' value='SEARCH MORE'></form></body>

  ";echo "<br><br> <a href='index.php'><button> LOGOUT </button></a>";
}

mysqli_close($conn);
 ?>
