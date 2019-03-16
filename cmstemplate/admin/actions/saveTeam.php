<?php


include("../functions/main.php"); 



// this is where i save my images
$fileName = $_POST["old_strImage"];

if ($_FILES["strImage"]["name"]!="")
{
  $fileName = $_FILES["strImage"]["name"];
  move_uploaded_file($_FILES["strImage"]["tmp_name"], "../../assets/".$fileName);
}




// print_r($fileName);
// die;
// $_POST["pageID"] = (isset($_POST["pageID"]))?$_POST["pageID"]:"";
// echo "INSERT INTO pages (strName, strContent, strSubContent, nTemplatesID) 
// VALUES (\"{$_POST["strName"]}\",
// \"{$_POST["strContent"]}\",
// \"{$_POST["strSubContent"]}\",
// \"{$_POST["nTemplatesID"]}\")";
// die;
if($_POST["teamID"]!="")
{

  doSQL("UPDATE team 
  SET strName=\"{$_POST["strName"]}\",
  strImage=\"{$fileName}\",
  strImageAlt=\"{$_POST["strImageAlt"]}\"
    WHERE id=\"{$_POST["teamID"]}\""
    );
  $verb = "updated";
} else {

  
  doSQL("INSERT INTO team (strName, strImage, strImageAlt) 
                VALUES (\"{$_POST["strName"]}\",
                \"{$fileName}\",
              
                \"{$_POST["strImageAlt"]}\")");
  $verb = "created";
 
}

// echo "INSERT INTO pages (strName, strImage, strSubImage, strImageAlt, strContent, strSubContent, nTemplatesID) 
// VALUES (\"{$_POST["strName"]}\",
// \"{$fileName}\",
// \"{$strSubImage}\",
// \"{$_POST["strImageAlt"]}\",
// \"{$_POST["strContent"]}\",
// \"{$_POST["strSubContent"]}\",
// \"{$_POST["nTemplatesID"]}\")";
// die;

 header("location: ../team.php?success=true&verb=$verb");


?>