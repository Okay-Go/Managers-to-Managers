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
		</article>
	</section>

	<?php endwhile;

	else :
		echo '<p>No content found</p>';

	endif;

get_footer();	

?>