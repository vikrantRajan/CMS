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
      if(isset($_GET["teamID"])){
          // i must be editing team....
        $verb = "Editing";
        $arrTeam = getTeam($_GET["teamID"]);

        if (!$arrTeam)
        {
          echo "hey... no page with that ID";
          die;
        }
      } else{
        // not set
        $_GET["teamID"] = (isset($_GET['teamID']))?$_GET['teamID']:"";
        $arrTeam['strName']  = (isset($arrTeam['strName']))?$arrTeam['strName']:"";
        
        $arrTeam['strImage']  = (isset($arrTeam['strImage']))?$arrTeam['strImage']:"";
        
        $arrTeam['strImageAlt']  = (isset($arrTeam['strImageAlt']))?$arrTeam['strImageAlt']:"";
        
      }

      ?>
      <h1><?=$verb?> Your Team</h1>

      <form method="post" action="actions/saveTeam.php" enctype="multipart/form-data">
        <input type="hidden" name="teamID" value="<?=$_GET["teamID"]?>">
        <h3>Team Member Name</h3>
        <input type="text" name="strName" value="<?=$arrTeam['strName']?>" placeholder="Enter Team Name"><br/>
        
        <div class="formImageContainer">
          <div class="formImage">
              <h2>Team Member Profile Photo</h2>
              <img src="../assets/<?=$arrTeam["strImage"]?>" alt="icon" width="100px"><br/>
              <input type="hidden" name="old_strImage" value="<?=$arrTeam["strImage"]?>">
              <p><?=$arrTeam["strImage"]?></p>
              <input type="file" name="strImage"><br/>
          </div>    
        </div>
        <h2>Image Alt Tag</h2>  
        <input type="text" name="strImageAlt" value="<?=$arrTeam['strImageAlt']?>" placeholder="Sub Image Alt Tag">
        <input type="submit" value="SAVE TEAM">
      </form>
      
    </article>
     

  </div>
</div>

</body>
</html>