<?php get_header(); ?>
<main class="content">
    <div class="home-image">
        <img src="<?php echo get_theme_file_uri('home-image.jpg'); ?>" alt="I dont give no fucks about no screen readers">
    </div>
    <div class="about">
        <?php if( get_field('about_biography') ): ?>
            <p><?php the_field('about_biography'); ?></p>
        <?php endif; ?>
    </div>
</main>
<?php get_footer();