<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Esquire\'s_Equations
 */

?>

<footer id="colophon" class="site-footer pt-3">
	<div class="body-footer">

		<div class="all-logos text-center d-flex container">
			<div class="footer-all row">
				<ul class="icon-section">
					<li class="icon-links col">
						<a href="#">
							<i class="fab fa-facebook-f"></i></a>
					</li>
					<li class="icon-links col">
						<a href="#">
							<i class="fab fa-instagram"></i></a>
					</li>
				</ul>
			</div>

			<div class="col container">
				<img src="http://esquires-equations.local/wp-content/uploads/2023/05/get-in-my-brain-1-2.png" alt=""
					class="footer-right-logo">
			</div>
		</div>

		<?php if (has_nav_menu('footer-community-menu')): ?>


		<?php endif; ?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>