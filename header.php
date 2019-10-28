<?php
/**
 * The header for our theme
 *
 * @package WordPress
 * @subpackage LearnMultisiteLander
 * @since 0.1.0
 */

?>
<!doctype html>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'page page-home preload' ); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'learnmultisitelander' ); ?></a>

	<header class="header-main dark">
		<nav>
		<a href="/" class="logo" rel="home"><svg id="learn-multisite-symbol" data-name="Learn Multisite Symbol" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 350 350"><defs><style>.logo-1{fill:#131320; fill-opacity: 1;}.logo-2{fill:#fcb12e;}.logo-2,.logo-3,.logo-4,.logo-5,.logo-6{fill-rule:evenodd;}.logo-3{fill:#ee3854;}.logo-4{fill:#00bdd4;}.logo-5{fill:#2bbaa3;}.logo-6{fill:#fff;}</style></defs><title>learn-multisite-logo-dark-bg</title><rect class="logo-1" width="350" height="350"/><path class="logo-2" d="M232,126.9a117.82,117.82,0,0,1,16.43,18.5c14.62-11.94,33.61-11,47.42,3.08,15.28,15,15.26,36.05,0,51-13.82,14.09-32.8,15-47.42,3.08A116.91,116.91,0,0,1,232,221.1c-1.48,1.58-2.93,3-4.37,4.44,31.17,30.86,58.21,29.44,89.81-4.44,35.44-33.08,35.45-61.14,0-94.2-31.6-33.87-58.64-35.3-89.81-4.43C229.1,123.9,230.55,125.34,232,126.9Z" /><path class="logo-3" d="M114.85,221.08A117.1,117.1,0,0,1,98.4,202.59c-14.62,11.93-33.61,11-47.4-3.08-15.29-15-15.27-36,0-51,13.81-14.09,32.78-15,47.4-3.08a117.52,117.52,0,0,1,16.45-18.5c1.49-1.58,2.91-3,4.37-4.46C88.05,91.6,61,93,29.38,126.89-6,160-6.06,188,29.42,221.08,61,255,88.05,256.4,119.21,225.53,117.76,224.09,116.3,222.68,114.85,221.08Z" /><path class="logo-4" d="M220.53,232.58A117.36,117.36,0,0,1,202,249c11.93,14.63,11,33.61-3.08,47.41-15,15.29-36,15.27-51,0-14.09-13.82-15-32.78-3.08-47.41a115.59,115.59,0,0,1-18.51-16.44c-1.58-1.46-3-2.92-4.44-4.38C91,259.38,92.47,286.44,126.32,318c33.07,35.44,61.15,35.44,94.21,0,33.88-31.59,35.32-58.65,4.44-89.81C223.54,229.66,222.09,231.12,220.53,232.58Z" /><path class="logo-5" d="M126.34,115.4A117.82,117.82,0,0,1,144.84,99c-11.94-14.62-11-33.62,3.08-47.41,15-15.29,36-15.28,51,0C213,65.38,214,84.35,202,99a117.76,117.76,0,0,1,18.5,16.43c1.58,1.48,3,2.93,4.45,4.39C255.85,88.6,254.4,61.56,220.54,30c-33.07-35.44-61.15-35.45-94.2,0C92.46,61.56,91,88.6,121.9,119.79,123.34,118.33,124.75,116.87,126.34,115.4Z" /><path class="logo-6" d="M118.94,228.51c38.24,41,70.74,41,109,0,41-38.26,41-70.74,0-109-38.27-41-70.77-41-109,0C77.91,157.75,77.91,190.23,118.94,228.51Zm25-84c17.35-17.65,41.76-17.65,59,0,17.69,17.35,17.67,41.72,0,59-17.31,17.69-41.71,17.68-59,0C126.24,186.18,126.24,161.81,143.9,144.46Z" /></svg></a>
		<div class="nav-toggle"></div>

		<ul class="inline right">
			<li><a href="signup.html" class="signupbutton button button-secondary button-m full-width-tablet" role="button">Sign Up</a></li>
		</ul>
		</nav>
	</header>

	<main id="content" class="site-content">
