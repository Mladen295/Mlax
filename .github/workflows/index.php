<?php get_header(); ?>

<div class="wrapper">
	<div class="left">
		<div class="up">
			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post();
        get_template_part( 'content', get_post_format() );
			endwhile; ?>
<nav>
	<div class="pagination">
		<a <?php next_posts_link( 'Previous' ); ?></a>
		<a <?php previous_posts_link( 'Next' ); ?></a>
	</div>
</nav>
			<?php endif; ?>
		</div> 
	</div> 
</div>	
<?php get_footer(); ?>
