<?php
/**
 * Template Name: 游戏主页
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
<script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
<style>
img {
	height: auto;
	width: 100%;
}

</style>
	<?php
			while ( have_posts() ) :
				the_post();
	?>
	<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '', '' ); ?>



<?php if ( has_post_thumbnail() ) : ?>
	<div class="thumbnailimage">
		<?php the_post_thumbnail('Full'); ?>
	</div><!-- .entry-page-image -->
<?php endif; ?>

	<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
	  <a href="<?php the_permalink() ?>" title="<?php printf(__('Permalink to %s', 'plaintxtblog'), _wp_specialchars(get_the_title(), 1)) ?>" rel="bookmark"><?php the_title() ?></a>
      </h1>
      <h2 class="subtitle">
	  <div class="entry-content">
<?php the_content('<span class="more-link">'.__('More&hellip;', 'plaintxtblog').'</span>') ?>

<?php link_pages('<div class="page-link">'.__('Pages: ', 'plaintxtblog'), "</div>\n", 'number'); ?>
				</div>
      </h2>
    </div>
  </div>


</section

<?php endwhile; // end of the loop. ?>
