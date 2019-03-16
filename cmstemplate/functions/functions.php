<?php
function connectToDB(){
  // $con = mysqli_connect("localhost","root","","vanpolar");
  $con = mysqli_connect("192.185.103.168", "vikrantr_nathan", "hotpink", "vikrantr_booksForKids");
  
  return $con;
}


function getPage($pageId)
{ 
  if (!$pageId){
    echo "Hey you didn't pass a page Id into the getpage function";
  }
  $con = connectToDB();

  // $sql = "SELECT" * FROM pages WHERE id='$pageId'";
  // SELECT pages.* // this says get a;; fields from the table pages
  // SELECT pages.*, templates.strFileLocation FROM pages LEFT JOIN templates ON templates.id=pages.nTemplatesId WHERE pages.id='$pageId'

  // $sql = "SELECT * FROM pages WHERE Id='$pageId/'"; // returns data from the two columns
  $sql = "SELECT pages.*, templates.strFileLocation FROM pages LEFT JOIN templates ON templates.id=pages.nTemplatesId WHERE pages.id='{$pageId}'";

  $arrPage = mysqli_fetch_assoc(mysqli_query($con, $sql));

  return $arrPage;
}
function saveData($sql)
{
  $con = connectToDB(); // call the connect function and return $con;
  mysqli_query($con, $sql);
}


function getNavLinks($locationId)
{

  // connect to database
  $con = connectToDB();

  $sql = "SELECT id, strName, nPagesId FROM links WHERE nLocationsId='{$locationId}'"; // returns data from the two columns
  $result = mysqli_query($con, $sql); // returns a result OBJECT

  while($row = mysqli_fetch_assoc($result)) // fetches an associative array from the variable $result, which was defined as the sql statement
  {
    echo "<a href=\"index.php?id={$row['nPagesId']}\">".$row['strName']."</a>";
  }
}

function getDataFromTable($table)
{

  // connect to database
  $con = connectToDB();

  $sql = "SELECT * FROM $table"; // returns data from the two columns
  
  $result = mysqli_query($con, $sql); // returns a result OBJECT

  return $result;
}

function showDataGrid($table,$whichSnippetFile)
{
  $result = getDataFromTable($table);

  while($row = mysqli_fetch_assoc($result))
  {
    include("snippet/".$whichSnippetFile);
  }

}

function conDisplay($record, $field)
{

  if (isset($record[$field]))
  {
    echo $record[$field];
  }
}

function getGlobals()
{
  $con = connectToDB();
  $result = mysqli_query($con, "SELECT * FROM globals");
  // returns a result from the database
  while($row = mysqli_fetch_assoc($result))
  {
    $myArray[$row["strName"]] = $row["strValue"];
  }
  return $myArray;
}


function getTeamMembers()
{

  // open a connection to db
  $con = connectToDB();

  $sql = "SELECT * FROM team ORDER BY strName"; // dynamically select all records from a table

  $result = mysqli_query($con, $sql); // returns a result OBJECT mysqli_query
  $teamHTML = "";
  while($row = mysqli_fetch_assoc($result)){
    $teamHTML .= "<div class='profile'><img src='assets/".$row["strImage"]."' alt='".$row["strName"]."'><p>".$row["strName"]."</p></div><br>";
  }

  return $teamHTML; // this is a result object, WITH ALL THE ROWS INSIDE... 
} 
?>