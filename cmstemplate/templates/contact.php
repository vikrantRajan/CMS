<?php
include("templates/partials/header.php");
?>
  <body>
    <div id="contactwrapper" data-image="<?=$arrPageDetails["strBackgroundImage"]?>">
      <header>
        <div id="topbar">
          <div class="logo"><img src="templates/imgs/logo.png" alt="My Website" /></div>
          <!-- LOGO -->
          <nav>
            <?=getNavLinks(1)?>
            <!-- <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Team</a> -->
            <?php 
    $arrGlobals = getGlobals();
    // print_r($arrGlobals);  ?>
          </nav>
          <!-- NAV -->
        </div>
        
      </header>

      <div id="content">
      <h1><?=$arrPageDetails["strMainTitle"]?></h1>
        <h2><?=$arrPageDetails["strSubTitle"]?></h2>
        <div id="contacthero" data-image="<?=$arrPageDetails["strImage"]?>"></div>
      </div>
      <div class="contentgrid">
        <div class="subcontent">
          <p><?=$arrPageDetails["strContent"]?></p>
          <p><?=$arrPageDetails["strSubContent"]?></p>
        </div><!-- sub content -->
      </div><!-- content grid -->
      
    </div>
    <?php
include("templates/partials/footer.php");
?> 