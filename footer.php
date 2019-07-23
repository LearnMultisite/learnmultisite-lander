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
			<h3>Learn Multisite in 2 Afternoons</h3>
			<p class="paragraph">Build real-world plugins and themes and deploy them across your entire organization.</p>
		</div>

		<div class="card card-content dark margin-bottom max-width-l">

			<form class="row reduce-spacing">
				<div class="col-two-thirds center-tablet middle">
					<h3 class="space-none">Ready to get started?</h3>
					<p class="paragraph">We'll be launching Summer 2019.</p>
				</div>
				<div class="col-one-third middle">
					<a href="signup.html" class="signupbutton button button-primary" role="button">Let me know when you've launched!</a>
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

<!-- Begin Mailchimp Signup Form -->

<div id="mc_embed_signup">
	<form action="https://learnmultisite.us3.list-manage.com/subscribe/post?u=9f75f3da5b68d3120794eb737&amp;id=2c21d69e1d" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
		<div id="mc_embed_signup_scroll">
			<div class="close-x" id="close-signup">
				<svg class="svg-icon" viewBox="0 0 20 20">
					<path fill="none" d="M12.71,7.291c-0.15-0.15-0.393-0.15-0.542,0L10,9.458L7.833,7.291c-0.15-0.15-0.392-0.15-0.542,0c-0.149,0.149-0.149,0.392,0,0.541L9.458,10l-2.168,2.167c-0.149,0.15-0.149,0.393,0,0.542c0.15,0.149,0.392,0.149,0.542,0L10,10.542l2.168,2.167c0.149,0.149,0.392,0.149,0.542,0c0.148-0.149,0.148-0.392,0-0.542L10.542,10l2.168-2.168C12.858,7.683,12.858,7.44,12.71,7.291z M10,1.188c-4.867,0-8.812,3.946-8.812,8.812c0,4.867,3.945,8.812,8.812,8.812s8.812-3.945,8.812-8.812C18.812,5.133,14.867,1.188,10,1.188z M10,18.046c-4.444,0-8.046-3.603-8.046-8.046c0-4.444,3.603-8.046,8.046-8.046c4.443,0,8.046,3.602,8.046,8.046C18.046,14.443,14.443,18.046,10,18.046z"></path>
				</svg>
			</div>
			<h2>Find out when we launch and receive 50% off!</h2>
			<div class="indicates-required">
				<span class="asterisk">*</span> indicates required
			</div>
			<div class="mc-field-group">
				<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span></label>
				<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
			</div>
			<div class="mc-field-group">
				<label for="mce-FNAME">First Name </label>
				<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
			</div>
			<div id="mce-responses" class="clear">
				<div class="response" id="mce-error-response" style="display:none"></div>
				<div class="response" id="mce-success-response" style="display:none"></div>
			</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_9f75f3da5b68d3120794eb737_2c21d69e1d" tabindex="-1" value=""></div>
			<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
		</div>
	</form>
</div>

<!--End mc_embed_signup-->

<?php wp_footer(); ?>

</body>
</html>
