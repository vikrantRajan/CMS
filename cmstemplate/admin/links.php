<?php
include("partials/checkLoggedIn.php");
?>
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Your Links</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,800|Roboto" rel="stylesheet"> 
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
  <div class="pages">
    
    <article>
      
      <h1>Here Are All Your Links</h1>
      <h2>What would you like to do?</h2>

      <?php
      if (isset($_GET["success"]))
      {
        ?>
        <p class="msg success">We <?=ucfirst($_GET["verb"])?> Your Link Successfully</p>
        <?php
      }?>
    
    
      <div class="action">
        <a href="linkForm.php" class="btn "><i class="fas fa-plus-circle"></i> Add Link</a>
      </div>

      <div class="recordRowHeader">
        <div class="recordCell name">Name</div>
        <div class="recordCell edit">Edit</div>
        <div class="recordCell delete">Delete</div>
      </div>

     
      <?php
      $arrLinks =getRecords("SELECT * FROM links");
      while($row = mysqli_fetch_assoc($arrLinks))
      {
        echo "<div class=\"recordRow\">
                <div class=\"recordCell name\">{$row["strName"]}</div>
                <div class=\"recordCell edit\"><a href=\"linkForm.php?linkID={$row["id"]}\"><i class=\"fas fa-pencil-alt\"></i></a></div>
                <div class=\"recordCell delete\"><a href=\"actions/deleteLink.php?linkID={$row["id"]}\"><i class=\"fas fa-trash-alt\"></i></a></div>
              </div>";

      }
      ?>
    </article>
    
  </div>
</div>

</body>
</html>