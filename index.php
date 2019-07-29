<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage LearnMultisiteLander
 * @since 0.1.0
 */

get_header();
?>

<section class="bg-image-hero center-tablet dark overlay-hero">
	<div class="full-screen -margin-bottom middle padding padding-top-tablet">
	<div class="row max-width-l">
		<div class="col-one-half middle">
		<div>
			<h1 class="hero">Learn Multisite</h1>
			<p class="lead">A premium video-based course to allow you to run, maintain, and keep secure, multiple WordPress websites at once.</p>
			<a href="signup.html" class="signupbutton button button-primary space-top" role="button">Let me know when you've launched</a>
		</div>
		</div>
		<div class="col-one-half middle">
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/content/hero-illustration.png" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/content/hero-illustration.png 1x, <?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/content/hero-illustration@2x.png 2x" alt="Hero Illustration">
		</div>
	</div>
	</div>
	<div class="padding">
	<div class="row margin-bottom max-width-l">
		<div class="col-one-half middle">
		<h3>From 1 to 100,000 (and more!) sites</h3>
		<p class="paragraph">WordPress Multisite allows you to run thousands of sites. We'll give you the know-how and confidence to run 100,000 sites like you're used to running just one.</p>
		</div>
		<div class="col-one-half">
		<img class="rounded shadow-l" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/content/lots-of-sites.png" alt="Screenshot of WordPress Network  dashboard highlighting a large number of sites">
		</div>
	</div>
	<div class="row max-width-l reverse-order">
		<div class="col-one-half">
		<img class="rounded shadow-l" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/content/learn-inset.png" alt="Example slide with overlay of Rich recording">
		</div>
		<div class="col-one-half middle">
		<h3>35 Videos and 10+ hours of tutorials</h3>
		<p class="paragraph">Covering everything from what multisite is and why you should (and shouldn't!) use it, how to install it, right through to developing a custom multisite-ready plugin.</p>
		</div>
	</div>
	</div>
</section>

<section class="bg-gradient-light -margin-bottom-2 overlay padding">
	<div class="center max-width-m">
	<h2>Over 15 years' experience</h2>
	<p class="paragraph">We've run some of the biggest multisite installations in the world and have over 15 years experience in developing for WordPress. Learn from our mistakes and our expertise.</p>
	</div>
	<div class="margin-top max-width-l">
	<img class="rounded shadow-l" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/content/full-slide.jpg" alt="An example slide from the course showing text on a yellow background.">
	</div>
</section>

<section class="bg-gradient-dark center dark padding">
	<div class="margin-top max-width-l">
	<div class="margin-bottom max-width-m">
		<h3>Multisite powers millions of websites</h3>
		<p class="opacity-m paragraph">Learn how to go from running 1 to 100,000 sites.</p>
	</div>
	<div class="row min-two-columns">
		<div class="col-one-fourth">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/content/nyt-logo.png" alt="New York Times Logo">
		</div>
		<div class="col-one-fourth">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/content/bbcamerica-logo.png" alt="BBC America Logo">
		</div>
		<div class="col-one-fourth">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/content/harvard-logo.png" alt="Harvard University Logo">
		</div>
		<div class="col-one-fourth">
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/content/nbc-news.png" alt="NBC News logo">
		</div>
	</div>
	</div>
</section>

<section class="padding">
	<div class="max-width-l">
		<div class="center">
			<h2>From first principles to professional development</h2>
			<p class="paragraph">Learn Multisite from scratch. Here's the full list of sections which covers everything you'll need to run all your organizations websites.</p>
		</div>
		<div class="row margin-top timeline">
		<div class="col-one-fourth">
				<h5><span class="coursecount">01</span>When You Should <em>Not</em> Use Multisite</h5>
				<p>Multisite isn't always the right tool for the job. Save yourself headaches ny knowing how to decide.</p>
			</div>
			<div class="col-one-fourth">
				<h5><span class="coursecount">02</span>When You <em>Could/Should</em> Use Multisite</h5>
				<p>Now you know when NOT to use Multisite, learn how to make the right decision of when to use it.</p>
			</div>
			<div class="col-one-fourth">
				<h5><span class="coursecount">03</span>Setting up Your Local Environment</h5>
				<p>A local environment is vital and a way for us to all start on the same page. Using Local by Flywheel.</p>
			</div>
			<div class="col-one-fourth">
				<h5><span class="coursecount">04</span>Go From Single Site to Multisite</h5>
				<p>Learn how to move from your current single site install to a fresh-and-ready Multisite installation.</p>
			</div>
		</div>
	</div>

	<div class="max-width-l">

		<div class="row margin-top timeline">
			<div class="col-one-fourth">
				<h5><span class="coursecount">05</span>Naming Conventions</h5>
				<p>Blogs? Sites? Networks? Superadmins? Network admins? Learn the lingo in Multisite land.</p>
			</div>
			<div class="col-one-fourth">
				<h5><span class="coursecount">06</span>User Roles</h5>
				<p>Multisite changes roles and capabilities within WordPress - learn what it does and why it does it.</p>
			</div>
			<div class="col-one-fourth">
				<h5><span class="coursecount">07</span>Network Admin Panel</h5>
				<p>Justlike every site has its own dashboard, every network has it's own administration panel.</p>
			</div>
			<div class="col-one-fourth">
				<h5><span class="coursecount">08</span>Plugins and Multisite</h5>
				<p>Learn the different types of plugins and how Multisite handles them across your network(s).</p>
			</div>
		</div>
	</div>

	<div class="max-width-l">

		<div class="row margin-top timeline">
			<div class="col-one-fourth">
				<h5><span class="coursecount">09</span>Theme Availability and Activation</h5>
				<p>Themes are vital in WordPress. Learn how Multisite handles the public-facing side of your sites.</p>
			</div>
			<div class="col-one-fourth">
				<h5><span class="coursecount">10</span>Editing Multisite-specific Emails</h5>
				<p>Multisite adds lots of new email templates that are sent to your site managers. Get the lowdown on them.</p>
			</div>
			<div class="col-one-fourth">
				<h5><span class="coursecount">11</span>Media Uploads and Directories</h5>
				<p>WordPress has a media library. Find out how Multisite handles media libraries across your network.</p>
			</div>
			<div class="col-one-fourth">
				<h5><span class="coursecount">12</span>Database Overview and Deep Dive</h5>
				<p>Let's take a real detailed look at the database so we can see exactly how Multisite works under the hood.</p>
			</div>
		</div>
	</div>

	<div class="max-width-l">

		<div class="row margin-top timeline">
			<div class="col-one-fourth">
				<h5><span class="coursecount">13</span>New Site Template</h5>
				<p>What happens when you press 'Add New Site'? Why does that new site look that way?</p>
			</div>
			<div class="col-one-fourth">
				<h5><span class="coursecount">14</span>WP-Config Defaults</h5>
				<p>Your config file determines how your all of your sites run. Learn how to safely tweak the wp-config.php file.</p>
			</div>
			<div class="col-one-fourth">
				<h5><span class="coursecount">15</span>Domain Mapping</h5>
				<p>Every site in your network can have its own custom URL. Find out a few ways you can achieve this.</p>
			</div>
			<div class="col-one-fourth">
				<h5><span class="coursecount">16</span>Development Environments</h5>
				<p>Local, Test, Development, Staging, Pre-production, Production. What are they and how many do you need?</p>
			</div>
		</div>
	</div>

	<div class="max-width-l">

		<div class="row margin-top timeline">
			<div class="col-one-fourth">
				<h5><span class="coursecount">17</span>Multi-language Multisite</h5>
				<p>Do you have visitors that speak different languages? Multisite can help you better reach those folks.</p>
			</div>
			<div class="col-one-fourth">
				<h5><span class="coursecount">18</span>Single Sign-On</h5>
				<p>Want your visitors to be signed in across all of your web properties? Then you'll need single sign-on.</p>
			</div>
			<div class="col-one-fourth">
				<h5><span class="coursecount">19</span>The switch_to_blog() function</h5>
				<p>Developing for multisite often means running code on one site from within another. Find out how.</p>
			</div>
			<div class="col-one-fourth">
				<h5><span class="coursecount">20</span>The REST API</h5>
				<p>WordPress has a great REST API. But does WordPress Multisite? You betcha'</p>
			</div>
		</div>
	</div>

	<div class="max-width-l">

		<div class="row margin-top timeline">
			<div class="col-one-fourth">
				<h5><span class="coursecount">21</span>Saving Time and Sanity with WP-CLI</h5>
				<p>It's impossible to say how much time wp-cli has saved us over the years, but it is a LOT.</p>
			</div>
			<div class="col-one-fourth">
				<h5><span class="coursecount">22</span>Build a Multisite-aware Plugin</h5>
				<p>Building plugins for Multisite isn't quite the same as single site. Learn the common gotchas.</p>
			</div>
			<div class="col-one-fourth">
				<h5><span class="coursecount">23</span>Deploying a Multisite-ready Theme Across Your Sites</h5>
				<p>Your org. have a common look and feel? Need some sites to be slightly different? No probs.</p>
			</div>
			<div class="col-one-fourth">
				<h5><span class="coursecount">24</span>Migrations (Staging<->Production)</h5>
				<p>Moving sites between staging and production can be tricky.  Let's see if we can help out.</p>
			</div>
		</div>
	</div>

	<div class="max-width-l">

		<div class="row margin-top timeline">
			<div class="col-one-fourth">
				<h5><span class="coursecount">25</span>Multi-tenancy vs Multisite</h5>
				<p>What if you want sites with different databases but use the same codebase? Multi-tenancy may be for you.</p>
			</div>
			<div class="col-one-fourth">
				<h5><span class="coursecount">26</span>Database sharding</h5>
				<p>When you start getting into serious numbers of sites or users, you may need to split - or shard - your database. Learn how and why.</p>
			</div>
			<div class="col-one-fourth">
				<h5><span class="coursecount">27</span>Security in Multisite</h5>
				<p>Securing one site can be tricky. What about hundreds of thousands of sites? Learn how to keep your sites and users safe.</p>
			</div>
			<div class="col-one-fourth">
				<h5><span class="coursecount">28</span>SEO in Multisite</h5>
				<p>There's no point in having loads of sites if no one can find them. How can Multisite help you with search engine optimization?</p>
			</div>
		</div>
	</div>

	<div class="max-width-l">

		<div class="row margin-top timeline">
			<div class="col-one-fourth">
				<h5><span class="coursecount">29</span>The Future  of Multisite</h5>
				<p>What's next for Multisite; learn how to stay up-to-date and how you can help guide its future.</p>
			</div>
			<div class="col-one-fourth">
				<h5><span class="coursecount">30</span>Hosting Recommendations</h5>
				<p>Can 3rd-parties host Multisite for you? Absolutely. Here's some recommendations for you.</p>
			</div>

		</div>
	</div>

</section>

<section class="bg-light center">
	<div class="row no-gutter">
	<div class="col-one-half middle padding padding-bottom padding-top">
		<div class="max-width-m">
		<p class="paragraph">Taught by two guys with 15+ years of experience</p>
		<h3>"Having knowledge and expertise is one thing; being able to share that with others' is another skill entirely. Jeremy and Rich have both in abundance."</h3>
		</div>
	</div>
	<div class="col-one-half bg-image-03 padding-bottom padding-top"></div>
	</div>
</section>

<?php
get_footer();
