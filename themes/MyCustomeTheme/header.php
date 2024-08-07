
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Gadget Site</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <link rel="shortcut icon" href="favicon.ico" />
    <link
      rel="stylesheet"
      media="screen"
      href="./assets/vendor/jquery-1.8.3.min.js"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" media="screen" href="<?php echo get_template_directory_uri();?>/style.css" />
    <script
      src="https://kit.fontawesome.com/5edb8394fa.js"
      crossorigin="anonymous"
    ></script>
  </head>

  <body>
    <!--container start-->
    <div class="container">
<!--header section start-->
<header>
        <div class="wrapper">
          <div class="hamburger">
            <span class="line line1">line1</span>
            <span class="line line2">line2</span>
            <span class="line line3">line3</span>
          </div>
          <div class="header-content">
            <nav class="header-left">
                <?php wp_nav_menu(array("theme_location"=>"primary-menu","menu_class"=>"nav-list")) 
                ?>
            </nav>
            <div class="header-center">
              <a href="#FIXME" class="button" target="_self">contact us</a>
            </div>
            <div class="header-right">
              <ul class="icons-list">
                <li>
                  <a href="#FIXME" title="Cart" target="_self" class="cart"
                    >cart</a
                  >
                </li>
                <li>
                  <a href="#FIXME" title="Search" target="_self" class="search"
                    >search</a
                  >
                </li>
                <li>
                  <a href="#FIXME" title="Earth" target="_self" class="earth"
                    >earth</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </header>
      <!--header section end-->
         <!--main section start-->
         <main>