
<?php  get_header(); ?>
<section class="page-margin">
<div class="wrapper">
<h1>
<a href="<?php echo site_url();?>">
<?php the_title()?></a></h1>
<div class="page-content-div">
<?php the_content() ?>
</div>
</div>
</section>
<?php  get_footer(); ?>
