<?php
include("templates/partials/header.php");
?>
  <body>
  <?php 
    $arrGlobals = getGlobals();
    // print_r($arrGlobals);  ?>
    <div id="teamwrapper">
      <header>
        <div id="topbar">
          <div class="logo"><img src="templates/imgs/logo.png"  alt="My Website" /></div>
          <!-- LOGO -->
          <nav>
            <?=getNavLinks(1)?>
            <!-- <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Team</a> -->
          </nav>
          <!-- NAV -->
        </div>
        <div id="hero" class="tall" data-image="<?=$arrPageDetails["strImage"]?>"></div>
      </header>

      <div id="content">
        <h1><?=$arrPageDetails["strMainTitle"]?></h1>
        <h2><?=$arrPageDetails["strSubTitle"]?></h2>
        
      </div>


      
      <div class="contentgrid">
        <div class="profilegrid"><?=getTeamMembers()?></div>
        
        <div class="subcontent">
        <p><?=$arrPageDetails["strContent"]?></p>
          <p><?=$arrPageDetails["strSubContent"]?></p>
        </div>
        <!-- sub content -->
        
        <!-- sub image -->
      </div>
      <!-- content grid -->
    </div>
    <?php
include("templates/partials/footer.php");
?> 