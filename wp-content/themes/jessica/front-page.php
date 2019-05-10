<?php get_header(); ?>
<main class="content">
	<?php
	$hero_image = get_field('hero_image');
	$about_biography = get_field('about_biography');
	$front_gallery = get_field('front_gallery');
	?>

<<<<<<< HEAD
    <div class="home-image" style="background-image: url(<?php echo wp_get_attachment_image_url($hero_image['id'], 'large'); ?>);"></div>
    <h2>About</h2>
    <?php if ($about_biography): ?>
        <div class="about">
            <?php echo $about_biography; ?>
        </div>
    <?php endif; ?>
=======
	<div class="home-image" style="background-image: url(<?php echo wp_get_attachment_image_url($hero_image['id'], 'large'); ?>);">some shit</div>

	<?php if ($about_biography): ?>
		<div class="about">
			<?php echo $about_biography; ?>
		</div>
	<?php endif; ?>
>>>>>>> a7361c048b1b49b936d5ee852b0c03d4eda2a88c

	<?php if ($front_gallery): ?>
		<section class="gallery">
			<ul class="gallery__list">
				<?php foreach ($front_gallery as $front_gallery_key => $front_gallery_value): ?>
					<li class="gallery__list-item">
						<?php echo wp_get_attachment_image($front_gallery_value['id'], 'large'); ?>
						<?php echo apply_filters('the_content', wp_get_attachment_caption($front_gallery_value['id'])); ?>
					</li>
				<?php endforeach; ?>
			</ul>
		</section>
	<?php endif; ?>
	<?php
	?>
</main>
<?php get_footer();
