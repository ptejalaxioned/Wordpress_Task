<?php 
//Template Name: Template About
?>

<?php get_header(); ?>
<section class="banner2">
<h1>   <?php the_title()?></h1>
       <div class="wrapper">
       <figure class="banner-img">
           <img src="<?php echo get_template_directory_uri();?>/assets/images/05.jpg" alt="Banner Img" />
         </figure>
         <div class="banner2-content">
           <h2 class="first-caps">
           </h2>
           <p>
           <?php the_content(); ?>
             <!-- lorem ipsum dolor sit amet consectetur adipisicing elit. Error
             consectetur maxime laudantium placeat ea mollitia vero illum
             officia. -->
           </p>
           <div class="banner2-button">
             <a href="#fixme" title="Shop Now" target="_self" class="shop-now buttons">Show</a>
           </div>
         </div>
       </div>
     </section>
     <!--banner section end-->

<?php get_footer(); ?>
