<?php
include("../functions/functions.php");
$sql = "INSERT INTO contact(
    strFirstName,
    strLastName,
    strEmail,
    nPhone,
    strMessage
)
VALUES(
    '".$_POST["strFirstName"]."',
    '".$_POST["strLastName"]."',
    '".$_POST["strEmail"]."',
    '".$_POST["nPhone"]."',
    '".$_POST["strMessage"]."'
)";
$test = saveData($sql);


header("location: contact.php?success=true");


?>