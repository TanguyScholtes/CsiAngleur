<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage espacep
 * @since Espace P 0.0.1
 */

get_header(); ?>


<main class="homepage-main">
	<!-- include view depending of processing step -->

	<section class="double-column">
		<h2 class="hidden">Présentation</h2>
		<div class="column">
			<p class="img-wrapper">
				<a class="img-link" href="img/house.png" alt="La Maison médicale d'Angleur">La Maison médicale d'Angleur</a>
			</p>
		</div>
		<div class="column">
			<p>La maison médicale d’Angleur est une ABSL appartenant aux Centres de Santé Intégrés. Elle fonctionne sur un principe d’inscription et possède tout ce qu’il faut pour soigner petits et grands, avec la même qualité de soin que chez n’importe quel autre médecin.</p>
			<p>Contrairement aux généralistes, la Maison médicale est accessible et ne vous fait pas passer par une longue file d’attente avant de vous reçevoir. Elle possède même un service de garde afin de pouvoir continuer à s’occuper de vous même lorsque vous tombez malade en dehors des heures d’ouverture.</p>

			<p class="button"><a class="button-link" href="csiangleur/register">S'inscrire à la Maison médicale</a></p>
		</div>
	</section>

	<section class="double-column">
		<h2 class="hidden">Nous contacter</h2>
		<div class="column">
			<?php $home = new WP_Query('post_type=contact&order=ASC'); ?>
	        <?php if ( $home->have_posts() ) : ?>
	            <?php while ( $home->have_posts() ) : $home->the_post(); ?>
	                <section class="media">
	                    <h3 class="title media__title"><?php the_title(); ?></h3>
	                    <div>
	                        <?php the_content(); ?>
	                    </div>
	                </section>
	            <?php endwhile; ?>
	        <?php endif; ?>
		</div>
		<div class="column">
			<iframe class="gmap gmap-home" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2531.773602033405!2d5.595196315658798!3d50.61274427949804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c0f746b29cb281%3A0x69612a0f1477f0cc!2sRue+Vaudr%C3%A9e+48%2C+4031+Li%C3%A8ge!5e0!3m2!1sfr!2sbe!4v1504450413742" width="300" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</section>

	<section class="double-column">
		<h2 class="hidden">Envie de rester informé ?</h2>
		<div class="column">
			<img class="img" src="<?php echo get_bloginfo('template_url') ?>/img/doctor.png" alt="">
		</div>
		<div class="column">
			<h3 class="title">Envie de rester informé ?</h3>
			<p>Inscrivez-vous à notre newsletter pour et recevez régulièrement les dernières activités, publications ou événements qui font l’actualité de la Maison médicale d’Angleur.</p>
			<div class="newsletter-register">
				<?php echo do_shortcode('
				[newsletter_form class="footer-form" button_label="S\'inscrire"]
				[newsletter_field name="email" label="Email"]
				[/newsletter_form]'); ?>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
