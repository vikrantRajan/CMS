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
      if(isset($_GET["pageID"])){
          // i must be editing page....
        $verb = "Editing";
        $arrPage = getPage($_GET["pageID"]);

        if (!$arrPage)
        {
          echo "hey... no page with that ID";
          die;
        }
      } else{
        // not set
        $_GET["pageID"] = (isset($_GET['pageID']))?$_GET['pageID']:"";
        $arrPage['strName']  = (isset($arrPage['strName']))?$arrPage['strName']:"";
        $arrPage['strContent']  = (isset($arrPage['strContent']))?$arrPage['strContent']:"";
        $arrPage['strImage']  = (isset($arrPage['strImage']))?$arrPage['strImage']:"";
        $arrPage['strBackgroundImage']  = (isset($arrPage['strBackgroundImage']))?$arrPage['strBackgroundImage']:"";
        $arrPage['strMainTitle']  = (isset($arrPage['strMainTitle']))?$arrPage['strMainTitle']:"";
        $arrPage['strSubTitle']  = (isset($arrPage['strSubTitle']))?$arrPage['strSubTitle']:"";
        $arrPage['strSubImage']  = (isset($arrPage['strSubImage']))?$arrPage['strSubImage']:"";
        $arrPage['strImageAlt']  = (isset($arrPage['strImageAlt']))?$arrPage['strImageAlt']:"";
        $arrPage['strSubContent']  = (isset($arrPage['strSubContent']))?$arrPage['strSubContent']:"";
      }

      ?>
      <h1><?=$verb?> A Page</h1>

      <form method="post" action="actions/savePage.php" enctype="multipart/form-data">
        <input type="hidden" name="pageID" value="<?=$_GET["pageID"]?>">
        <h3>Page Name</h3>
        <input type="text" name="strName" value="<?=$arrPage['strName']?>" placeholder="Enter Page Name"><br/>
        <h3>Main Title</h3>
        <textarea name="strMainTitle"><?=$arrPage['strMainTitle']?></textarea><br>
        <h3>Sub Title</h3>
        <textarea name="strSubTitle"><?=$arrPage['strSubTitle']?></textarea><br>
        <h3>Content</h3>
        <textarea name="strContent"><?=$arrPage['strContent']?></textarea><br>
        <h3>Sub Content</h3>
        <textarea name="strSubContent"><?=$arrPage['strSubContent']?></textarea><br>
        <select name="nTemplatesID">
            <option>Select Template</option>
             <?php
             //$arrPage[nTemplatesID] <----- that is the id of the template....
              $arrTemplates =getRecords("SELECT * FROM templates");
              while($row = mysqli_fetch_assoc($arrTemplates))
              {
                $isSelected = ($arrPage["nTemplatesID"] == $row["id"])?"SELECTED":"";
                echo "<option value=\"{$row["id"]}\" $isSelected >{$row["strName"]}</option>";

              }
              ?>
        </select>
        <div class="formImageContainer">
        <div class="formImage">
        <h2>Background Image</h2>
              <img src="../assets/<?=$arrPage["strBackgroundImage"]?>" alt="icon" width="100px"><br/>
              <input type="hidden" name="old_strBackgroundImage" value="<?=$arrPage["strBackgroundImage"]?>">
              <p><?=$arrPage["strBackgroundImage"]?></p>
              <input type="file" name="strBackgroundImage"><br/>      

              <h2>Hero Image</h2>
              <img src="../assets/<?=$arrPage["strImage"]?>" alt="icon" width="100px"><br/>
              <input type="hidden" name="old_strImage" value="<?=$arrPage["strImage"]?>">
              <p><?=$arrPage["strImage"]?></p>
              <input type="file" name="strImage"><br/>

              </div>
              <div class="formImage">
              <h2>Sub Image</h2>
              <img src="../assets/<?=$arrPage["strSubImage"]?>" width="100px">
              <input type="hidden" name="old_strSubImage" value="<?=$arrPage["strSubImage"]?>"><p><?=$arrPage["strSubImage"]?></p>
        <input type="file" name="strSubImage">

            </div>
            </div>
        <h2>Image Alt Tag</h2>  
        <input type="text" name="strImageAlt" value="<?=$arrPage['strImageAlt']?>" placeholder="Sub Image Alt Tag">
        <input type="submit" value="SAVE PAGE">
      </form>
      
    </article>
     

  </div>
</div>

</body>
</html>