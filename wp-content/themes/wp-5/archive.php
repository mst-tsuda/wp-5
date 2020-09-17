<?php load_template(TEMPLATEPATH . '/header-2.php'); ?>


<div class="blog-section">
	<div class="container"> 
		
		<h2 class="heading text-center">BLOGS</h2>

<?php
  $paged = get_query_var('paged') ? get_query_var('paged') : 1;
  query_posts( $query_string.'&posts_per_page=6&paged='.$paged); ?>
  
			  		<?php if(have_posts()): while(have_posts()): the_post(); ?>
			  		
			  		<div class="blog-post-grids">
					 <div class="blog-post">
					 	<h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						 <p>
							 <span>日付：<a href="<?php the_permalink(); ?>">
							<time datetime="<?php the_time('y-m-d'); ?>"></time><?php the_time( get_option('date_format') ); ?></a></span>
						 </p>
						 
						 <a href="<?php the_permalink(); ?>">
							 <?php if ( has_post_thumbnail() ) :
							 the_post_thumbnail('post-thumbnails');
							 else :
							 echo '<img src=""';
							 bloginfo( 'template_url' );
							 echo '/images/the_post_thumbnail_default.png" alt="デフォルト画像" />';
							 endif; ?>
						 </a>
						 
						 	
								 <?php echo mb_substr(get_the_excerpt(),0,262); ?>
							 
							 
						 	
				      	<div class="btn">
				        <a href="<?php the_permalink(); ?>" class="hvr-shutter-in-horizontal more"><span>Readmore</span></a>
				        </div>
					 </div>
					 </div> 
					 
					   <?php endwhile; ?>
					   <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
						<?php endif; ?>

		 
	
	</div>
</div>
     
     	<div class="clearfix"></div>
<?php get_footer(); ?>

 