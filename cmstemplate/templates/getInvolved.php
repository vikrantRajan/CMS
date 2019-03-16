<?php
include("templates/partials/header.php");
?>

  <body id="wrapper" data-image="<?=$arrPageDetails["strBackgroundImage"]?>">
    <?php 
    $arrGlobals = getGlobals();
    // print_r($arrGlobals);  ?>
    <div id="topbar">
          <div class="logo"><a href="index.php"><img src="templates/imgs/logo.png"  alt="My Website" /></a></div>
          <!-- LOGO -->
          <nav>
            <?=getNavLinks(1)?>
            <!-- <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Team</a> -->
          </nav>
          <!-- NAV -->
        </div>
    <div class="contentwrapper">
      <header>
        <div id="hero" class="tall" data-image="<?=$arrPageDetails["strImage"]?>"></div>
      </header>
      <div id="content">
        <h1><?=$arrPageDetails["strMainTitle"]?></h1>
        <h2><?=$arrPageDetails["strSubTitle"]?></h2>  
        <a href="index.php?id=1" class="btn">Click to know more</a>
      </div>
      <section>
        <div 
        class="subimage" 
        data-image="<?=$arrPageDetails["strSubImage"]?>">
        </div> <!-- sub image -->
      </section>
      <div class="contentgrid">
        <div class="subcontent">
          <p><?=$arrPageDetails["strContent"]?></p>
          <p><?=$arrPageDetails["strSubContent"]?></p>
        </div><!-- sub content -->
      </div><!-- content grid -->
    </div><!-- content wrapper -->
    <?php
include("templates/partials/footer.php");
?> 
