<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package web_design_experiments
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">


		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


<!--BOOTSTRAP CORE JAVASCRIPT
		PLACED AT THE  END OF THE DOCUMENT SO THE PAGES LOAD FASTER
=================================================================  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/js/bootstrap.min.js"></script>
<!-- stats.js lib -->
<script src="<?php bloginfo('template_directory');?>/assets/js/nav-scroll.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/js/go-to-top.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/js/lightbox.min.js"></script>
<script src="<?php bloginfo('template_directory');?>/assets/js/preload.js"></script>



<?php wp_footer(); ?>

</body>
</html>
