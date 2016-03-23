<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Underscore_Pets
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'underscore-pets' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'underscore-pets' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'underscore-pets' ), 'underscore-pets', '<a href="http://www.google.com" rel="designer">Ajwad, Yahya, Ben</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript">
jQuery(document).ready(function($) {
	$.backstretch("<?php echo get_stylesheet_directory_uri(); ?>/img/theimage.jpg"
		);
});
 </script>


 <?php 
$options = get_option( 'cd_options_settings' );
echo $options['cd_text_field'] . '<br />';
if (isset($options['cd_checkbox_field']) == 'on'){
echo $options['cd_checkbox_field'] . '<br />';
} else {
echo 'off <br />';
}
echo $options['cd_radio_field'] . '<br />';
echo $options['cd_textarea_field'] . '<br />';
echo $options['cd_select_field'];
?>

</body>
</html>
