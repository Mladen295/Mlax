<?php get_header(); ?>
<div class="wrapper">
  <div class="up">
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'content', get_post_format() );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
 <?php if ( has_post_thumbnail() ) {
	the_post_thumbnail();
} ?>
 </div>
</div>
<?php get_footer(); ?>