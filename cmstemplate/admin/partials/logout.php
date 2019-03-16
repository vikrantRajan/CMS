<?php
include("../functions/main.php"); // because we are inside the actions folder, we need ../ to go up and out of this directory
?>
<?php
session_start();
$_SESSION["userID"] = false;
header("location: ../index.php?error=true");
?>