<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bridging-ideas
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer bg-inverse text-white">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bridging-ideas' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'bridging-ideas' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php

				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'bridging-ideas' ), 'bridging-ideas', '<a href="http://underscores.me/">Asjad</a>' );
			?>
		<!-- .site-info -->
<div class="container">
  <div class="row align-items-start">
    <div class="col">
    	<h2> Navigation Bar </h2>
     <?php 
$defaults = array( 
	'menu' => '', 
	'container' => 'div',
	'container_class' => '',
	'container_id' => '',
	'menu_class' => 'menu nav',
	'menu_id' => '',
	'echo' => true,
	'fallback_cb' => 'wp_page_menu',
	'before' => '',
	'after' => '',
	'link_before' => '',
	'link_after' => '',
	'items_wrap' => '<ul id="%1$s" class="list-group %2$s">%3$s</ul>',
	'item_spacing' => 'preserve',
	'depth' => 0, 'walker' => '', 
	'theme_location' => '' );

wp_nav_menu( $defaults);
?>

    </div>
    <div class="col">
      <?php 
get_sidebar();
?>
    </div>
    <div class="col">
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Bootstrappin">
      <br> © 2017 Bridging Ideas.<br/>
    </div>
  </div>  
<?php wp_footer(); ?>

</body>
</html>
