
<?php
   ob_start();
   session_start();
   
$host = "localhost";
$user = "root";
$password = "Shivam@6162";
$databaseName = "userdb";
$msg = "";

$con = new mysqli($host,$user,$password,$databaseName);

if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $name = mysqli_real_escape_string($con ,$_POST["username"]);
      $password = mysqli_real_escape_string($con ,$_POST["password"]);
      $loginQ = "select * from user where username='$name' and password='$password'";
      $res = mysqli_query($con,$loginQ) or die("Error");
      if(mysqli_num_rows($res)){
          $_SESSION['name'] = $name;
          echo "<script>location.href='dashboard.php'</script>";
      }else{
          $msg="place enter veiled username and password";
      }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <h1>login</h1>
        <input type="text" name="username" placeholder="username" required><br/>
        <input type="text" name="password" placeholder="password" required><br/>
        <input type="submit" value="login">
        <div class="error"><?php echo $msg;?></div>
    </form>
</body>
</html>