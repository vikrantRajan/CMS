<?php


include("../functions/main.php"); 


$_POST["globalID"] = (isset($_POST["globalID"]))?$_POST["globalID"]:"";

if($_POST["globalID"]!="")
{

  doSQL("UPDATE globals 
  SET 
  strName=\"{$_POST["strName"]}\",
  strValue=\"{$_POST["strValue"]}\"
    WHERE id=\"{$_POST["globalID"]}\""
    );
  $verb = "updated";
} else {

  
  doSQL("INSERT INTO globals (
    strName, 
    strValue) 
                VALUES (\"{$_POST["strName"]}\",
                \"{$_POST["strValue"]}\")");
  $verb = "created";
 
}

 header("location: ../globals.php?success=true&verb=$verb");


?>