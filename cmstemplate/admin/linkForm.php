<?php
include("partials/checkLoggedIn.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="fill">
<nav>
<a href="dashboard.php">Home</a>
<a href="links.php">Edit Links</a>
<a href="pages.php">Edit Pages</a>
<a href="globals.php">Edit Globals</a>
<a href="partials/logout.php">Log Out</a>

</nav>

<div class="wrapper">
  <div class="pageForm">
    
    <article>
      
      <?php
      $verb = "Adding";
      if(isset($_GET["linkID"])){
          // i must be editing link....
        $verb = "Editing";
        $arrLink = getLink($_GET["linkID"]);

        if (!$arrLink)
        {
          echo "hey... no Link with that ID";
          die;
        }
      } else{
        // not set
        $_GET["linkID"] = (isset($_GET['linkID']))?$_GET['linkID']:"";
        $arrLink['strName']  = (isset($arrLink['strName']))?$arrLink['strName']:"";
        $arrLink['strContent']  = (isset($arrLink['strContent']))?$arrLink['strContent']:"";
        $arrLink['strSubContent']  = (isset($arrLink['strSubContent']))?$arrLink['strSubContent']:"";
      }

      ?>
      <h1><?=$verb?> A Link</h1>

      <form method="post" action="actions/saveLink.php">
        <input type="hidden" name="linkID" value="<?=$_GET["linkID"]?>">
        <h3>Link Name</h3>
        <input type="text" name="strName" value="<?=$arrLink['strName']?>" placeholder="Enter Link Name"><br/>
        
        <select name="nLocationsID">
            <option>Select Link Location</option>
             <?php
             //$arrLink[nLocationsID] <----- that is the id of the template....
              $arrLinkLocations =getRecords("SELECT * FROM locations");
              while($row = mysqli_fetch_assoc($arrLinkLocations))
              {
                $isSelected = ($arrLink["nLocationsID"] == $row["id"])?"SELECTED":"";
                echo "<option value=\"{$row["id"]}\" $isSelected >{$row["strName"]}</option>";

              }
              ?>
        </select>
        <select name="nPagesID">
            <option>Select Where Link Goes</option>
             <?php
             //$arrLink[nPagesID] <----- that is the id of the template....
              $arrPages =getRecords("SELECT * FROM pages");
              while($row = mysqli_fetch_assoc($arrPages))
              {
                $isSelected = ($arrLink["nPagesID"] == $row["id"])?"SELECTED":"";
                echo "<option value=\"{$row["id"]}\" $isSelected >{$row["strName"]}</option>";

              }
              ?>
        </select>
        <input type="submit" value="SAVE LINK">
      </form>
      
    </article>
     

  </div>
</div>

</body>
</html>