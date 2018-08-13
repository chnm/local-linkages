<?php
/*
Template Name: Front
*/
get_header(); ?>

<header class="front-hero" role="banner">
	<div class="marketing">
		<div class="tagline">
			<h1><?php bloginfo( 'name' ); ?></h1>
			<h4 class="subheader"><?php bloginfo( 'description' ); ?></h4>
			<a role="button" class="download large button sites-button hide-for-small-only" href="<?php echo site_url('interest'); ?>">Sign up for alerts when registration opens</a>
		</div>
	</div>

</header>

<?php do_action( 'foundationpress_before_content' ); ?>

<?php do_action( 'foundationpress_after_content' ); ?>

<section class="benefits">
	<header>
		<h2>Learning Objectives for Creating Local Linkages</h2>
		<h4>The curriculum introduces participants to the topics and practices of local history, how to frame questions about the past, identify sources to answer those questions, place them in context, and present that historical interpretation online in a digital form.</h4>
	</header>

	<div class="semantic">
		<h3>Local History Sources</h3>
		<p>Finding digital primary sources of local history, determining if you can use material you find, and creating metadata to describe your sources.</p>
	</div>

	<div class="responsive">
		<h3>Analyzing Sources</h3>
		<p>Methods of primary source analysis, examining both the content and context of sources across a variety of source types</p>

	</div>

	<div class="customizable">
		<h3>Creating contexts for historical sources</h3>
		<p>Moving from individual sources to the wider social, cultural, economic, and political forces that influence local history</p>

	</div>

	<div class="professional">
		<h3>Building digital history exhibits</h3>
		<p>Bringing research and analysis of the primary sources and secondary literature into the digital realm as a well-constructed online exhibit</p>
	</div>

	<div class="why-foundation">
		<a href="/about" class="button">Learn more about the Creating Local Linkages project →</a>
	</div>

</section>

<?php get_footer();
