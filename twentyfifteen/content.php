<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		// Post thumbnail.
		twentyfifteen_post_thumbnail();
	?>



	<div class="entry-content">
			<div class="card">
           <div class="card-body">	
			   <div>
				   <p class="cbody_title">Author:</p> <p class="cbody_text"><?php the_author(); ?></p>
			   </div>
			   <p class="cbody_title">Posted: </p><p class="cbody_text"><?php the_time('jS F Y') ?></p>
			   <p class="cbody_title">Cateogory: </p><p class="cbody_text"><?php the_category(', ') ?></p><br>
        	</div>
		</div>
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s', 'twentyfifteen' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php
		// Author bio.
		if ( is_single() && get_the_author_meta( 'description' ) ) :
			get_template_part( 'author-bio' );
		endif;
	?>

	<footer class="entry-footer">
	<div class="card">
           <div class="card-body">	
		PREVIOUS: <?php previous_post('%', '', 'yes', 'yes'); ?><br />
		NEXT: <?php next_post('%', '', 'yes', 'yes'); ?>
		</div>
		</div>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->

<style>

	 .cbody_title{
		 font-weight: bold;	
		    margin: 0;
		padding-right:1em;
		float:left
	}
	
		.card-body {
		    margin: 0;

			float:right
	}
	
 .cbody_text{
		font-weight: normal	;
        margin: 0;
		float:left;
		padding-right:1em;
	}
</style>	