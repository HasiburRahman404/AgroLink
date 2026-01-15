<?php 
session_start();
session_destroy();

header("Location: ../VEIW/login.php");
exit();
?>