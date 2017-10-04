<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package beluga
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
                <?php echo do_shortcode('[aps-social id="1"]')?>
		<div class="inner">
		<div class="site-info">
			<?php beluga_license_info('echo') ?>
		</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<!--<a id="tothetop" href="#"><span class="genericon genericon-collapse"></span></a>-->
<div id="tothetop" class="icon-circle"><a href="#"><span class="genericon genericon-collapse"></span></a></div>
<?php wp_footer(); ?>

</body>
</html>
