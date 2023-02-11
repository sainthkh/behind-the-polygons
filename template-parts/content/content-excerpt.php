<?php
/**
 * Template part for displaying post archives and search results
 *
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header text-4xl text-center mb-4">
		<?php
		the_title( sprintf( '<h2 class="entry-title default-max-width mb-6 hover:underline"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' );
		btp_post_thumbnail();
		?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="mb-8">
			<?php the_excerpt(); ?>
		</div>

		<div class="flex">
			<a href="<?php the_permalink(); ?>" class="button block bg-white text-black px-8 py-4 mx-auto font-bold hover:bg-blue hover:text-white">Continue Reading</a>
		</div>
	</div><!-- .entry-content -->

</article><!-- #post-${ID} -->
