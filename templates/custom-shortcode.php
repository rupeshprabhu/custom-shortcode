<?php
/**
 * Custom Shortcode Template.
 *
 * @package custom-shortcode/templates
 *
 * @version 1.0.0
 * @since 1.0.0
 */

?>
<article class='article1'>
	<img class='img1' src="<?php echo esc_html( get_the_post_thumbnail_url( $old_post, 'medium' ) ); ?>" />
	<a href="<?php echo esc_html( get_permalink( $old_post->ID ) ); ?>" title="Click here to read the article"><h2 class='heading'><?php echo esc_html( $old_post->post_title ); ?></h2></a>
	<p class='para1'><?php echo esc_html( $old_post->post_excerpt ); ?></p>
	<a class='a1' href="<?php echo esc_html( get_permalink( $old_post->ID ) ); ?>" title="Click here to read the article">Read more</a>
</article>
