<?php
session_start();
if(isset($_SESSION['name'])){
    echo $_SESSION["name"];
}else{
    echo "<script>location.href='index.php'</script>";
}
?>