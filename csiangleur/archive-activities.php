<?php get_header(); ?>

<div class="main main__content">
    <h1 class="page-title">Nos activités</h1>

    <div>
        <h2 class="title media__title">Inscription à la newsletter</h2>
        <div>
            <p>Inscrivez-vous à notre newsletter pour et recevez régulièrement les dernières activités, publications ou événements qui font l’actualité de la Maison médicale d’Angleur.</p>
            <div class="newsletter-register">
				<?php echo do_shortcode('
				[newsletter_form class="footer-form" button_label="S\'inscrire"]
				[newsletter_field name="email" label="Email"]
				[/newsletter_form]'); ?>
			</div>
        </div>
    </div>

    <div>
        <?php $about = new WP_Query('post_type=activities&order=ASC'); ?>
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
