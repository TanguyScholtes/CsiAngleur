<?php get_header(); ?>

<div class="main main__content">
    <h1 class="page-title">Nous contacter</h1>

    <div>
        <?php $about = new WP_Query('post_type=contact&order=ASC'); ?>
        <?php if ( $about->have_posts() ) : ?>
            <section class="double-column">
                <?php while ( $about->have_posts() ) : $about->the_post(); ?>
                    <div class="column">
                        <h2 class="title media__title"><?php the_title(); ?></h2>
                        <div>
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </section>
        <?php endif; ?>
    </div>

    <section class="double-column">
		<h2 class="hidden">Nous contacter</h2>
        <div class="column">
			<p class="img-wrapper">
				<a class="img-link" href="<?php echo get_bloginfo('template_url') ?>/img/house.png" alt="La Maison médicale d'Angleur">La Maison médicale d'Angleur</a>
			</p>
		</div>
		<div class="column">
			<iframe class="gmap gmap-home" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2531.773602033405!2d5.595196315658798!3d50.61274427949804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0f746b29cb281%3A0x69612a0f1477f0cc!2sRue+Vaudr%C3%A9e+48%2C+4031+Li%C3%A8ge!5e0!3m2!1sfr!2sbe!4v1504450413742" width="300" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</section>
</div>

<?php get_footer(); ?>
