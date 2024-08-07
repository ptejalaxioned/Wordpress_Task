
<?php get_header(); ?>
<div class="single-post">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <div class="post-meta">
            <span>Posted on <?php the_date(); ?></span>
        </div>
        <div class="post-content">
            <?php the_content(); ?>
        </div>
    <?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>
