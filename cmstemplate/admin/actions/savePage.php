<?php


include("../functions/main.php"); 



// this is where i save my images
$strBackgroundImage = $_POST["old_strBackgroundImage"];
if ($_FILES["strBackgroundImage"]["name"]!="")
{
  $strBackgroundImage = $_FILES["strBackgroundImage"]["name"];
  move_uploaded_file($_FILES["strBackgroundImage"]["tmp_name"], "../../assets/".$strBackgroundImage);
}



$fileName = $_POST["old_strImage"];
if ($_FILES["strImage"]["name"]!="")
{
  $fileName = $_FILES["strImage"]["name"];
  move_uploaded_file($_FILES["strImage"]["tmp_name"], "../../assets/".$fileName);
}


$strSubImage = $_POST["old_strSubImage"];
if ($_FILES["strSubImage"]["name"]!="")
{
  $strSubImage = $_FILES["strSubImage"]["name"];
move_uploaded_file($_FILES["strSubImage"]["tmp_name"], "../../assets/".$strSubImage);
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
if($_POST["pageID"]!="")
{

  doSQL("UPDATE pages 
  SET strName=\"{$_POST["strName"]}\",
  strImage=\"{$fileName}\",
   strContent=\"{$_POST["strContent"]}\",
   strSubContent=\"{$_POST["strSubContent"]}\",
    nTemplatesID= \"{$_POST["nTemplatesID"]}\",
    strMainTitle= \"{$_POST["strMainTitle"]}\",
    strSubTitle= \"{$_POST["strSubTitle"]}\",
    strSubImage=\"{$strSubImage}\",
    strImageAlt=\"{$_POST["strImageAlt"]}\",
    strBackgroundImage=\"{$strBackgroundImage}\"
    WHERE id=\"{$_POST["pageID"]}\"");
  $verb = "updated";
} else {

  
  doSQL("INSERT INTO pages (strName, strImage, strSubImage, strImageAlt, strContent, strSubContent, nTemplatesID, strMainTitle, strSubTitle, strBackgroundImage) 
                VALUES (\"{$_POST["strName"]}\",
                \"{$fileName}\",
                \"{$strSubImage}\",
                \"{$_POST["strImageAlt"]}\",
                \"{$_POST["strContent"]}\",
                \"{$_POST["strSubContent"]}\",
                \"{$_POST["nTemplatesID"]}\",
                \"{$_POST["strMainTitle"]}\",
                \"{$_POST["strSubTitle"]}\",
                \"{$strBackgroundImage}\")");
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

 header("location: ../pages.php?success=true&verb=$verb");


?>