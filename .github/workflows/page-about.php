<?php
/*
Template Name: Page About
*/
?>
<?php get_header(); ?>
<?php 
$args = array(
	'post_type' => 'your_post',
);  
$your_loop = new WP_Query( $args ); 
if ( $your_loop->have_posts() ) : while ( $your_loop->have_posts() ) : $your_loop->the_post();
$meta = get_post_meta( $post->ID, 'your_fields', true ); ?>
<div>
<img src="<?php echo $meta['image']; ?>" height="300px%" style="margin-left: 10%"; >
</div>
<?php endwhile; endif; 
wp_reset_postdata(); ?>
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

 </div><!-- /.blog-post -->
</div>
<?php get_footer(); ?>