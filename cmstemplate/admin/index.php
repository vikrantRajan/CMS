<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <!-- <style>
      * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
        font-family: "Roboto", sans-serif;
      }
      
      .CMSLoginwrapper {
        text-align: center;
        width: 100%;
        height: 100vh;
      }
      .halfpaneTwo {
        text-align: center;
        margin: 0 auto;
        max-width: 400px;
        padding-top: 0px;
      }
      .CMSlogin article {
        padding: 40px 0 0 0;
      }
      .CMSlogin article h1 {
        font-family: "Raleway", sans-serif;
        font-weight: bold;
      }
      .CMSlogin article p {
        color: #777;
        font-size: 14px;
        line-height: 22px;
        padding: 20px 0px;
      }
      
      .CMSlogin article form input[type="text"],
      .CMSlogin article form input[type="password"] {
        font-size: 14px;
        color: #017dc6;
        border-radius: 6px;
        border: none;
        background: #eee;
        padding: 10px;
        width: 100%;
        margin-bottom: 20px;
        padding-left: 20px;
      }
      .CMSlogin article form input[type="submit"] {
        font-size: 14px;
        color: #fff;
        text-transform: uppercase;
        border-radius: 6px;
        border: none;
        background: dodgerblue;
        transition: all 0.6s ease-in;
        padding: 10px;
        width: 100%;
        margin-bottom: 20px;
      }
      .CMSlogin article form input[type="submit"]:hover {
        background: #00fff8;
  color: white;
  box-shadow: 0px 0px 40px 20px rgb(183, 245, 252);
      }
         /* SLIDER */
  .slider {
  margin: 0 auto;
  max-width: 940px;
}

.slide_viewer {
  height: 60vh;
  overflow: hidden;
  position: relative;
}

.slide_group {
  height: 100%;
  position: relative;
  width: 100%;
}

.slide {
  display: none;
  height: 100%;
  position: absolute;
  width: 100%;
}

.slide:first-child {
  display: block;
}

.slide:nth-of-type(1) {
  background-image: url(imgs/CMSBanners1.jpg);
  background-size: contain;
  background-position: 50%;
  background-repeat: no-repeat;
}

.slide:nth-of-type(2) {
  background-image: url(imgs/CMSBanners2.jpg);
  background-size: contain;
  background-position: 50%;
  background-repeat: no-repeat;

}

.slide:nth-of-type(3) {
  background-image: url(imgs/CMSBanners3.jpg);
  background-size: contain;
  background-position: 50%;
  background-repeat: no-repeat;
}

.slide:nth-of-type(4) {
  background-image: url(imgs/CMSBanners4.jpg);
  background-size: contain;
  background-position: 50%;
  background-repeat: no-repeat;
}

.slide_buttons {
  left: 0;
  position: absolute;
  right: 0;
  text-align: center;
}

a.slide_btn {
  color: #474544;
  font-size: 42px;
  margin: 0 0.175em;
  -webkit-transition: all 0.4s ease-in-out;
  -moz-transition: all 0.4s ease-in-out;
  -ms-transition: all 0.4s ease-in-out;
  -o-transition: all 0.4s ease-in-out;
  transition: all 0.4s ease-in-out;
}

.slide_btn.active,
.slide_btn:hover {
  color: #428CC6;
  cursor: pointer;
}

.directional_nav {
  height: 340px;
  margin: 0 auto;
  max-width: 940px;
  position: relative;
  top: -340px;
}

.previous_btn {
  bottom: 0;
  left: 100px;
  margin: auto;
  position: absolute;
  top: 0;
}

.next_btn {
  bottom: 0;
  margin: auto;
  position: absolute;
  right: 100px;
  top: 0;
}

.previous_btn,
.next_btn {
  cursor: pointer;
  height: 65px;
  opacity: 0.5;
  -webkit-transition: opacity 0.4s ease-in-out;
  -moz-transition: opacity 0.4s ease-in-out;
  -ms-transition: opacity 0.4s ease-in-out;
  -o-transition: opacity 0.4s ease-in-out;
  transition: opacity 0.4s ease-in-out;
  width: 65px;
}

.previous_btn:hover,
.next_btn:hover {
  opacity: 1;
}
  
    </style> -->
</head>
<body>

<div class="CMSLoginwrapper">
<div class="CMSlogin halfpaneTwo">
    
    <article>
      
      <h1>Log in to My CMS</h1>
      <p>Access your CMS to make changes to your website.</p>

      <form method="post" action="actions/processLogin.php">
        <input type="text" placeholder="Email Address" name="strEmail"/>
        <input type="password" placeholder="Password" name="strPassword"/>
        <input type="submit" value="Login">
      </form>
    </article>
  </div>
  <!-- SLIDER -->
  <div class="slider">
  <div class="slide_viewer">
    <div class="slide_group">
      <div class="slide">
      </div>
      <div class="slide">
      </div>
      <div class="slide">
      </div>
      <div class="slide">
      </div>
    </div>
  </div>
</div><!-- End // .slider -->

<div class="slide_buttons">
</div>

<div class="directional_nav">
  <div class="previous_btn" title="Previous">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="35px" height="35px" viewBox="-11 -11.5 65 66">
      <g>
        <g>
          <path fill="#ffffff" d="M-10.5,22.118C-10.5,4.132,4.133-10.5,22.118-10.5S54.736,4.132,54.736,22.118
			c0,17.985-14.633,32.618-32.618,32.618S-10.5,40.103-10.5,22.118z M-8.288,22.118c0,16.766,13.639,30.406,30.406,30.406 c16.765,0,30.405-13.641,30.405-30.406c0-16.766-13.641-30.406-30.405-30.406C5.35-8.288-8.288,5.352-8.288,22.118z" />
          <path fill="#ffffff" d="M25.43,33.243L14.628,22.429c-0.433-0.432-0.433-1.132,0-1.564L25.43,10.051c0.432-0.432,1.132-0.432,1.563,0	c0.431,0.431,0.431,1.132,0,1.564L16.972,21.647l10.021,10.035c0.432,0.433,0.432,1.134,0,1.564	c-0.215,0.218-0.498,0.323-0.78,0.323C25.929,33.569,25.646,33.464,25.43,33.243z" />
        </g>
      </g>
    </svg>
  </div>
  <div class="next_btn" title="Next">
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="35px" height="35px" viewBox="-11 -11.5 65 66">
      <g>
        <g>
          <path fill="#ffffff" d="M22.118,54.736C4.132,54.736-10.5,40.103-10.5,22.118C-10.5,4.132,4.132-10.5,22.118-10.5	c17.985,0,32.618,14.632,32.618,32.618C54.736,40.103,40.103,54.736,22.118,54.736z M22.118-8.288	c-16.765,0-30.406,13.64-30.406,30.406c0,16.766,13.641,30.406,30.406,30.406c16.768,0,30.406-13.641,30.406-30.406 C52.524,5.352,38.885-8.288,22.118-8.288z" />
          <path fill="#ffffff" d="M18.022,33.569c 0.282,0-0.566-0.105-0.781-0.323c-0.432-0.431-0.432-1.132,0-1.564l10.022-10.035 			L17.241,11.615c 0.431-0.432-0.431-1.133,0-1.564c0.432-0.432,1.132-0.432,1.564,0l10.803,10.814c0.433,0.432,0.433,1.132,0,1.564 L18.805,33.243C18.59,33.464,18.306,33.569,18.022,33.569z" />
        </g>
      </g>
    </svg>
  </div>
</div>
  
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
</body>
</html>