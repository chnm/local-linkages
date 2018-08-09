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
			<a role="button" class="download large button sites-button hide-for-small-only" href="<?php echo site_url('interest'); ?>">Sign up to learn more</a>
		</div>
	</div>

</header>

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<section class="intro" role="main">
	<div class="fp-intro">

		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php
					wp_link_pages(
						array(
							'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
							'after'  => '</p></nav>',
						)
					);
				?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'foundationpress_page_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_page_after_comments' ); ?>
		</div>

	</div>

</section>
<?php endwhile; ?>
<?php do_action( 'foundationpress_after_content' ); ?>

<section class="benefits">
	<header>
		<h2>Learning Objectives for Creating Local Linkages</h2>
		<h4>Consectetur a erat nam at lectus. Cursus in hac habitasse platea dictumst.Enim ut sem viverra aliquet eget sit. Leo vel orci porta non pulvinar neque laoreet suspendisse interdum.</h4>
	</header>

	<div class="semantic">
		<img src="http://via.placeholder.com/260x260" alt="placeholder">
		<h3>Mattis enim ut tellus</h3>
		<p>Quis ipsum suspendisse ultrices gravida dictum fusce. Pretium fusce id velit ut.</p>
	</div>

	<div class="responsive">
		<img src="http://via.placeholder.com/260x260" alt="placeholder">
		<h3>Eget dolor morbi non</h3>
		<p>Convallis convallis tellus id interdum velit laoreet. Sed faucibus turpis in eu mi bibendum neque egestas congue.</p>

	</div>

	<div class="customizable">
		<img src="http://via.placeholder.com/260x260" alt="placeholder">
		<h3>Ante in nibh</h3>
		<p>Magna fermentum iaculis eu non diam phasellus vestibulum lorem sed. Quam id leo in vitae turpis massa sed elementum.</p>

	</div>

	<div class="professional">
		<img src="http://via.placeholder.com/260x260" alt="placeholder">
		<h3>Congue nisi vitae suscipit tellus</h3>
		<p>Amet consectetur adipiscing elit pellentesque habitant. Congue nisi vitae suscipit tellus mauris.</p>
	</div>

	<div class="why-foundation">
		<a href="/about" class="button">Learn more about the Creating Local Linkages project →</a>
	</div>

</section>

<div class="section-divider">
	<hr />
</div>

<section class="community">
	<img src="http://via.placeholder.com/350x350" alt="placeholder">
	<div class="copy">
		<h2>Community</h2>
		<p>Nibh praesent tristique magna sit amet purus gravida quis. Quam pellentesque nec nam aliquam sem et. Sit amet luctus venenatis lectus. In nisl nisi scelerisque eu ultrices vitae. Nunc mattis enim ut tellus elementum sagittis vitae et leo.</p>
		<a role="button" class="download large button sites-button hide-for-small-only" href="<?php site_url('forums'); ?>">Explore the forums</a>
	</div>
</section>

<?php get_footer();
