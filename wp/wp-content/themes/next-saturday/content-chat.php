<?php
/**
 * @package Next_Saturday
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post' ); ?>>

	<?php next_saturday_entry_date(); ?>

	<div class="entry-container">

		<header class="entry-header">
			<h1 class="post-title">
				<?php if ( ! is_single() ) : ?>
					<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
				<?php else : ?>
					<?php the_title(); ?>
				<?php endif; ?>
			</h1>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<div class="highlight-box">
				<?php
					the_content( __( 'Read more <span class="meta-nav">&rarr;</span>', 'next-saturday' ) );
				?>
				<?php wp_link_pages( array( 'before' => '<div class="page-link"><p>' . __( 'Pages:', 'next-saturday' ), 'after' => '</p></div>' ) ); ?>
			</div><!-- .highlight-box -->
		</div><!-- .entry-content -->

		<div class="entry-meta-wrap">
			<div class="entry-meta">
				<span class="comments-num"><?php comments_popup_link( __( 'Leave a comment', 'next-saturday' ), __( '1 Comment', 'next-saturday' ), __( '% Comments', 'next-saturday' ) ); ?></span>
				<?php edit_post_link( __( 'Edit this Entry', 'next-saturday' ), '<span class="edit-link">', '</span>' ); ?>
			</div>
		</div>

	</div><!-- .entry-container -->
</article><!-- #post-## -->