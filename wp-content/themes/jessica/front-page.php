<?php get_header(); ?>
<section class="content">
    <main class="primary">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article class="article">
                    <header class="article__header">
                        <h1 class="article__heading">
                            [front page]
                            <?php the_title(); ?>
                        </h1>
                    </header>

                    <section class="article__content">
                        <?php the_content(); ?>
                    </section>

                    <?php edit_post_link(__('Edit', 'custom'), '<p class="article__edit">', '</p>'); ?>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <article class="article article--none">
                no posts
            </article>
        <?php endif; ?>
    </main>
</section>
<?php get_footer();