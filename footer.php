<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EtienRuhlCV
 */

?>

	</div><!-- #content -->

		<footer id="footer">
			<div class="container">
				<a href="<?php bloginfo('stylesheet_directory'); ?>/CV.pdf" download><button type="button" class="btn btn-default btn-lg cv-btn download-btn">Download CV</button></a>
			<p class="m-0 text-center text-white small">Copyright &copy; Etiën Ruhl 2019 - alle rechten voorbehouden</p>
			</div>
			<!-- /.container -->
			<!-- Bootstrap core JavaScript -->
			<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/vendor/jquery/jquery.min.js"></script>
            <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		</footer>
		
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
