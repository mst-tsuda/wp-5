<?php get_header(); ?>


<div class="blog-section">

    <p>
      <?php while(have_posts()): the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; ?>
    </p>
    
</div>
<?php get_footer(); ?>