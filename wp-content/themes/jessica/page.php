<?php get_header(); ?>
<section class="content">
    <main class="primary">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article class="article">
                    <header class="article__header">
                        <h1 class="article__heading">
                            <?php the_title(); ?>
                        </h1>
                    </header>

                    <section class="article__content">
                        <?php the_content(); ?>
                        <?php wp_link_pages(); ?>
                    </section>

                    <?php edit_post_link(__('Edit', 'custom'), '<p class="article__edit">', '</p>'); ?>

                    <?php comments_template(); ?>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <article class="article article--none">
                no posts
            </article>
        <?php endif; ?>
    </main>
    <?php get_sidebar(); ?>
</section>
<?php get_footer();