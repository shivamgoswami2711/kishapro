<?php
session_start();
if(isset($_SESSION['name'])){
    echo $_SESSION["name"];
    session_destroy ( );
}else{
    echo "<script>location.href='index.php'</script>";
}
?>