<?php get_header(); ?>
<main class="content">
	<?php
	$about_biography = get_field('about_biography');
	$front_gallery = get_field('front_gallery');
	?>

	<section class="gallery">
		<?php if ($front_gallery): ?>
			<ul class="gallery__list">
				<?php foreach ($front_gallery as $front_gallery_key => $front_gallery_value): ?>
					<li class="gallery__list-item" data-aos="fade-up">
						<?php echo wp_get_attachment_image($front_gallery_value['id'], 'large'); ?>
						<?php echo apply_filters('the_content', wp_get_attachment_caption($front_gallery_value['id'])); ?>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
	</section>

	<section id="about" class="about">
		<h2>About</h2>
		<?php if ($about_biography): ?>
			<?php echo $about_biography; ?>
		<?php endif; ?>
	</section>

	<section id="contact" class="contact">
		<h2>Contact</h2>
		<?php echo gravity_form( 1, false, false, false, '', false ); ?>
	</section>
</main>
<?php get_footer();
