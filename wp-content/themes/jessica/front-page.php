<?php get_header(); ?>
<main class="content">
    <?php
    $hero_image = get_field('hero_image');
    $about_biography = get_field('about_biography');
    $front_gallery = get_field('front_gallery');
    ?>

    <div class="home-image" style="background-image: url(<?php echo wp_get_attachment_image_url($hero_image['id'], 'large'); ?>);">some shit</div>

    <?php if ($about_biography): ?>
        <div class="about">
            <?php echo $about_biography; ?>
        </div>
    <?php endif; ?>

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