{"filter":false,"title":"sidebar.php","tooltip":"/wp-content/themes/wp-5/sidebar.php","undoManager":{"mark":2,"position":2,"stack":[[{"start":{"row":0,"column":0},"end":{"row":23,"column":0},"action":"insert","lines":["<?php load_template(TEMPLATEPATH . '/header1.php'); ?>","","<div class=\"blog-section\">","\t<div class=\"container\"> ","\t<div class=\"sing-img-text\">","    \t<p>","        <div class=\"about-section\">","        <?php while(have_posts()): the_post(); ?>","         <h3><a href=\"<?php the_permalink(); ?>\" title=\"<?php the_title_attribute(); ?>\"><?php the_title(); ?></a></h3>","         <h4><span>Posted：<a href=\"<?php the_permalink(); ?>\">","        <time datetime=\"<?php the_time('y-m-d'); ?>\"></time>","        <?php the_time( get_option('date_format') ); ?></a></span>","         </h4>","         <?php the_content(); ?>","        <?php endwhile; ?>","        </div>","     </p>","     </div>","     <?php get_sidebar(); ?>"," </div>","</div>","","<?php get_footer(); ?>",""],"id":1}],[{"start":{"row":0,"column":0},"end":{"row":23,"column":0},"action":"remove","lines":["<?php load_template(TEMPLATEPATH . '/header1.php'); ?>","","<div class=\"blog-section\">","\t<div class=\"container\"> ","\t<div class=\"sing-img-text\">","    \t<p>","        <div class=\"about-section\">","        <?php while(have_posts()): the_post(); ?>","         <h3><a href=\"<?php the_permalink(); ?>\" title=\"<?php the_title_attribute(); ?>\"><?php the_title(); ?></a></h3>","         <h4><span>Posted：<a href=\"<?php the_permalink(); ?>\">","        <time datetime=\"<?php the_time('y-m-d'); ?>\"></time>","        <?php the_time( get_option('date_format') ); ?></a></span>","         </h4>","         <?php the_content(); ?>","        <?php endwhile; ?>","        </div>","     </p>","     </div>","     <?php get_sidebar(); ?>"," </div>","</div>","","<?php get_footer(); ?>",""],"id":2}],[{"start":{"row":0,"column":0},"end":{"row":84,"column":0},"action":"insert","lines":["\t\t\t<div class=\"sing-img-text-left\">","\t\t\t\t<div class=\"blog-right1\">","\t\t\t\t\t<div class=\"search11\">","\t\t\t\t\t\t<h3>Newsletter</h3>","\t\t\t\t\t\t<form>","\t\t\t\t\t\t\t<input type=\"text\" value=\"Email...\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Email...';}\" required=\"\">","\t\t\t\t\t\t\t<input type=\"submit\" value=\"Subscribe\">","\t\t\t\t\t\t</form>","\t\t\t\t\t</div>","\t\t\t\t\t<div class=\"categories\">","\t\t\t\t\t\t<h3>Categories</h3>","\t\t\t\t\t\t<ul>","\t\t\t\t\t\t\t<li><a href=\"#\">Aliquam dapibus tincidunt</a></li>","\t\t\t\t\t\t\t<li><a href=\"#\">Donec sollicitudin molestie</a></li>","\t\t\t\t\t\t\t<li><a href=\"#\">Fusce feugiat malesuada odio</a></li>","\t\t\t\t\t\t\t<li><a href=\"#\">Cum sociis natoque penatibus</a></li>","\t\t\t\t\t\t\t<li><a href=\"#\">Magnis dis parturient montes</a></li>","\t\t\t\t\t\t\t<li><a href=\"#\">Donec sollicitudin molestie</a></li>","\t\t\t\t\t\t</ul>","\t\t\t\t\t</div>","\t\t\t\t\t<div class=\"categories categories-mid\">","\t\t\t\t\t\t<h3>Archieves</h3>","\t\t\t\t\t\t<ul>","\t\t\t\t\t\t\t<li><a href=\"#\">May 20,2009</a></li>","\t\t\t\t\t\t\t<li><a href=\"#\">July 31,2010</a></li>","\t\t\t\t\t\t\t<li><a href=\"#\">January 20,2012</a></li>","\t\t\t\t\t\t\t<li><a href=\"#\">November 2,2012</a></li>","\t\t\t\t\t\t\t<li><a href=\"#\">December 25,2014</a></li>","\t\t\t\t\t\t\t<li><a href=\"#\">January 14,2015</a></li>","\t\t\t\t\t\t</ul>","\t\t\t\t\t</div>","\t\t\t\t\t<div class=\"related-posts\">","\t\t\t\t\t\t<h3>Related Posts</h3>","\t\t\t\t\t\t<div class=\"related-post\">","\t\t\t\t\t\t\t<div class=\"related-post-left\">","\t\t\t\t\t\t\t\t<a href=\"single.html\"><img src=\"<?php echo get_template_directory_uri(); ?>/images/b4.jpg\" class=\"img-responsive\" alt=\" \" /></a>","\t\t\t\t\t\t\t</div>","\t\t\t\t\t\t\t<div class=\"related-post-right\">","\t\t\t\t\t\t\t\t<h4><a href=\"single.html\">Donec sollicitudin</a></h4>","\t\t\t\t\t\t\t\t<p>Aliquam dapibus tincidunt metus. ","\t\t\t\t\t\t\t\t\t<span>Praesent justo dolor, lobortis.</span>","\t\t\t\t\t\t\t\t</p>","\t\t\t\t\t\t\t</div>","\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>","\t\t\t\t\t\t</div>","\t\t\t\t\t\t<div class=\"related-post\">","\t\t\t\t\t\t\t<div class=\"related-post-left\">","\t\t\t\t\t\t\t\t<a href=\"single.html\"><img src=\"<?php echo get_template_directory_uri(); ?>/images/b1.jpg\" class=\"img-responsive\" alt=\" \" /></a>","\t\t\t\t\t\t\t</div>","\t\t\t\t\t\t\t<div class=\"related-post-right\">","\t\t\t\t\t\t\t\t<h4><a href=\"single.html\">Donec sollicitudin</a></h4>","\t\t\t\t\t\t\t\t<p>Aliquam dapibus tincidunt metus. ","\t\t\t\t\t\t\t\t\t<span>Praesent justo dolor, lobortis.</span>","\t\t\t\t\t\t\t\t</p>","\t\t\t\t\t\t\t</div>","\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>","\t\t\t\t\t\t</div>","\t\t\t\t\t\t<div class=\"related-post\">","\t\t\t\t\t\t\t<div class=\"related-post-left\">","\t\t\t\t\t\t\t\t<a href=\"single.html\"><img src=\"<?php echo get_template_directory_uri(); ?>/images/b2.jpg\" class=\"img-responsive\" alt=\" \" /></a>","\t\t\t\t\t\t\t</div>","\t\t\t\t\t\t\t<div class=\"related-post-right\">","\t\t\t\t\t\t\t\t<h4><a href=\"single.html\">Donec sollicitudin</a></h4>","\t\t\t\t\t\t\t\t<p>Aliquam dapibus tincidunt metus. ","\t\t\t\t\t\t\t\t\t<span>Praesent justo dolor, lobortis.</span>","\t\t\t\t\t\t\t\t</p>","\t\t\t\t\t\t\t</div>","\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>","\t\t\t\t\t\t</div>","\t\t\t\t\t\t<div class=\"related-post\">","\t\t\t\t\t\t\t<div class=\"related-post-left\">","\t\t\t\t\t\t\t\t<a href=\"single.html\"><img src=\"<?php echo get_template_directory_uri(); ?>/images/b3.jpg\" class=\"img-responsive\" alt=\" \" /></a>","\t\t\t\t\t\t\t</div>","\t\t\t\t\t\t\t<div class=\"related-post-right\">","\t\t\t\t\t\t\t\t<h4><a href=\"single.html\">Donec sollicitudin</a></h4>","\t\t\t\t\t\t\t\t<p>Aliquam dapibus tincidunt metus. ","\t\t\t\t\t\t\t\t\t<span>Praesent justo dolor, lobortis.</span>","\t\t\t\t\t\t\t\t</p>","\t\t\t\t\t\t\t</div>","\t\t\t\t\t\t\t<div class=\"clearfix\"> </div>","\t\t\t\t\t\t</div>","\t\t\t\t\t</div>","\t\t\t\t</div>","\t\t\t</div>",""],"id":3}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":84,"column":0},"end":{"row":84,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1600237944980,"hash":"b59c1437bda726dfd7cef9eebe6c81b48ed8fcfa"}