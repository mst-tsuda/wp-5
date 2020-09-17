<?php load_template(TEMPLATEPATH . '/header-2.php'); ?>


<div class="blog-section">
	<div class="container"> 

<h2 class="heading text-center">BLOG</h2>
    <p>
      <?php while(have_posts()): the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
    </p>
         <?php get_sidebar(); ?>
</div>
</div>
     
<?php get_footer(); ?>



