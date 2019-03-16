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
      if(isset($_GET["globalID"])){
          // i must be editing page....
        $verb = "Editing";
        $arrGlobals = mysqli_fetch_assoc(getRecords("SELECT * FROM globals WHERE id='".$_GET["globalID"]."'"));

        if (!$arrGlobals)
        {
          echo "hey... no page with that ID";
          die;
        }
      } else{
        // not set
        $_GET["globalID"] = (isset($_GET['globalID']))?$_GET['globalID']:"";
        $arrGlobals['strName']  = (isset($arrGlobals['strName']))?$arrGlobals['strName']:"";
        $arrGlobals['strValue']  = (isset($arrGlobals['strValue']))?$arrGlobals['strValue']:"";
       
      }

      ?>
      <h1><?=$verb?> A Global Value</h1>

      <form method="post" action="actions/saveGlobal.php">
        <input type="hidden" name="globalID" value="<?=$_GET["globalID"]?>">
        <h3>Enter Global Name</h3>
        <input type="text" name="strName" value="<?=$arrGlobals['strName']?>" placeholder="Enter Global Name"><br/>
        <h3>Enter Global Value</h3>
        <input type="text" name="strValue" value="<?=$arrGlobals['strValue']?>" placeholder="Enter Page Name"><br/>
      
        <input type="submit" value="SAVE GLOBAL">
      </form>
      
    </article>
     

  </div>
</div>

</body>
</html>