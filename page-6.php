<?php

get_header ();
get_sidebar();
if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	
	<section class="content">	
		<h2 class="article-title">
		<?php the_title(); ?></h2>
		<article>
			<p><?php the_content(); ?></p>
			<!-- <img src="<?php bloginfo('template_directory'); ?>/images/content-item.png" alt="m2m" width="527" height="180"> -->
		<!-- <h3 class="secondary-title"><a href="<?php the_permalink(); ?>"<?php the_title(); ?></a></h3> -->
		
		</article>
	</section>

	<?php endwhile;

	else :
		echo '<p>No content found</p>';

	endif;

get_footer();	

?>