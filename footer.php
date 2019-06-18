<?php
/**
 * The template for displaying the footer
 *
 * @package WordPress
 * @subpackage LearnMultisiteLander
 * @since 0.1.0
 */

?>

</main><!-- #content -->

<footer class="footer-main bg-gradient-primary dark overlay-shape-06">
	<div class="padding">
		<div class="center margin-bottom max-width-m">
			<h3>Learn multisite in 2 afternoons</h3>
			<p class="paragraph">Build real-world plugins and themes and deploy theme across your entire organization.</p>
		</div>

		<div class="card card-content dark margin-bottom max-width-l">

			<form class="row reduce-spacing">
				<div class="col-two-thirds center-tablet middle">
					<h3 class="space-none">Ready to get started?</h3>
					<p class="paragraph">We'll be launching Summer 2019.</p>
				</div>
				<div class="col-one-third middle">
					<a href="signup.html" class="button button-primary" role="button">Let me know when you've launched!</a>
				</div>
			</form>
		</div>

		<div class="row center-desktop max-width-l">
			<div class="col-two-fifths">
				<h6>LearnMultisite</h6>
				<p>A premium video-based course about WordPress multisite taught by Jeremy Felt and Rich Tape.</p>
			</div>
			<div class="col-one-fifth">
				<h6>Info</h6>
				<ul class="blank">
					<li><a href="#">Getting Started</a></li>
					<li><a href="#">Resources</a></li>
					<li><a href="#">Pricing</a></li>
				</ul>
			</div>
			<div class="col-one-fifth">
				<h6>Support</h6>
				<ul class="blank">
					<li><a href="#">Documentation</a></li>
					<li><a href="#">Updates</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>
			<div class="col-one-fifth">
				<h6>Connect</h6>
				<ul class="blank">
					<li><a href="https://twitter.com/learnmultisite">Twitter</a></li>
					<li><a href="mailto:hello@learnmultisite.com">Email</a></li>
					<li><a href="/blog/">Blog</a></li>
				</ul>
			</div>
		</div>
	</div>
	<p class="copyright"><span>LearnMultisite by </span><a href="https://jeremyfelt.com/" title="Visit Jeremy's website" target="_blank">Jeremy Felt</a> and <a href="https://richardtape.com/" title="Visit Rich's website" target="_blank">Rich Tape</a><span> - © <?php echo esc_html( date( 'Y' ) ); ?>, all rights reserved.</span></p>
</footer>

<?php wp_footer(); ?>

</body>
</html>
