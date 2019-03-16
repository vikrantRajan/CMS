<?php
include("partials/checkLoggedIn.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
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
  <div class="login">
    
    <article>
      
      <h1>Welcome Back!</h1>
      <h2>What would you like to do?</h2>

      <a href="pages.php">Edit Pages</a>
      <a href="links.php">Edit Links</a>
      <a href="globals.php">Site Wide Values</a>
      <a href="team.php">Edit Team</a>

      
    </article>
  </div>
</div>

</body>
</html>