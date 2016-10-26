<?php get_header(); ?>

<div class="main main__content">
    <h1 class="page-title">Actualités</h1>

    <div class="content-preview">
        <h2 class="content-preview__title title">Sommaire</h2>
        <?php $about = new WP_Query('post_type=actualites&order=ASC'); ?>
        <?php if ( $about->have_posts() ) : ?>
            <ul class="content-preview__list">
                <?php while ( $about->have_posts() ) : $about->the_post(); ?>
                    <li class="content-preview__list__item">
                        <a class="content-preview__list__link" href="<?php get_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>

    <div>
        <?php $about = new WP_Query('post_type=actualites&order=ASC'); ?>
        <?php if ( $about->have_posts() ) : ?>
            <?php while ( $about->have_posts() ) : $about->the_post(); ?>
                <section class="media">
                    <h2 class="title media__title"><?php the_title(); ?></h2>
                    <div>
                        <?php the_content(); ?>
                    </div>
                </section>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
