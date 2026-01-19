<?php 
session_start();
session_unset();
session_destroy();

header("Location:../../../Customer/VIEW/home_page.php");
exit();
?>