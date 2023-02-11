<?php
/**
 * Template part for displaying posts
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header alignwide">
		<?php the_title( '<h1 class="entry-title text-5xl text-center mb-6 md:-mx-12 lg:-mx-40">', '</h1>' ); ?>
		<?php btp_post_thumbnail(); ?>
	</header><!-- .entry-header -->

	<div class="entry-content text-xl my-4">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'btp' ) . '">',
				'after'    => '</nav>',
				/* translators: %: Page number. */
				'pagelink' => esc_html__( 'Page %', 'btp' ),
			)
		);
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
