<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

        <!--banner section start-->
        <section class="banner">
          <div class="wrapper">
            <figure class="main-image">
              <img src="<?php echo get_template_directory_uri();?>/assets/images/mbr.jpg" alt="Banner" />
            </figure>
            <div class="banner-content">
              <h1>
                <a
                  href="<?php echo get_template_directory_uri();?>"
                  title="Gadget Site"
                  target="_self"
                  class="first-letter-caps"
                  >gadget site</a
                >
              </h1>
              <p class="first-letter-caps">website design template</p>
              <div class="banner-buttons">
                <a
                  href="#FIXME"
                  class="button orange-button"
                  target="_self"
                  title="About Us"
                  >about us</a
                >
                <a
                  href="#FIXME"
                  class="button blue-button"
                  target="_self"
                  title="More Info"
                  >more info</a
                >
              </div>
              <figure class="banner-content-image">
                <img
                  src="<?php echo get_template_directory_uri();?>/assets/images/mbr-7.jpg"
                  alt="Banner Content Image"
                />
              </figure>
            </div>
          </div>
        </section>
        <!--banner section end-->
        <!-- -------------------------------------------------- --> 
    
        <div class="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="post-div">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="post-content">
            <?php the_content(); ?>
        </div>
        </div>  
    <?php endwhile; endif; ?>
</div>
 <!-- -------------------------------------------------- -->
        <!--features section starts-->
      <section class="features">
        <div class="wrapper">
          <ul class="features-list">
            <li>
              <h4 class="first-letter-caps voilet-tik">newest models</h4>
              <p class="para-for-h4">
                lorem ipsum dolor sit amet consectetur adipisicing elit non
                alias cupiditate quas enim.
              </p>
            </li>
            <li>
              <h4 class="first-letter-caps blue-tik">active community</h4>
              <p class="para-for-h4">
                lorem ipsum dolor sit amet consectetur adipisicing elit non
                alias cupiditate quas enim.
              </p>
            </li>
            <li>
              <h4 class="first-letter-caps orange-tik">best support</h4>
              <p class="para-for-h4">
                lorem ipsum dolor sit amet consectetur adipisicing elit non
                alias cupiditate quas enim.
              </p>
            </li>
          </ul>
        </div>
      </section>
      <!--features section end-->
	
<?php get_footer(); ?>