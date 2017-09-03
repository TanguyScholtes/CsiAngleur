<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage espacep
 * @since Espace P 0.0.1
 */
?>

	</div><!-- .site-content -->

	<div class="footer-wrapper">
        <footer class="footer">
            <h2 class="hidden">Footer</h2>
            <div class="left-column">
				<?php if ( has_nav_menu( 'footer' ) ) : ?>
					<nav class="siteplan" role="navigation">
						<h3 class="hidden">Plan du site</h3>
						<?php
							// Primary navigation menu.
							wp_nav_menu( array(
								'menu_class'     => 'siteplan',
								'theme_location' => 'footer',
							) );
						?>
					</nav><!-- .main-navigation -->
				<?php endif; ?>
            </div>
            <div class="right-column">
                <section class="social-container">
                    <h3 class="hidden">Réseaux sociaux</h3>
                    <p class="social">Suivez-nous sur <span class="social-link-wrapper"><a class="facebook-link social-link" href="http://www.facebook.com">Facebook</a> <a class="twitter-link social-link" href="https://twitter.com/">Twitter</a></span></p>
                </section>

                <section id="hcard-Maison-médicale-Angleur-ASBL" class="vcard">
                    <h3 class="fn org">Maison médicale d'Angleur ASBL</h3>
                    <div class="adr">
                        <p class="street-address">Rue Vaudrée, 48</p>
                        <p>
                            <span class="postal-code">4031</span>
                            <span class="locality">LIÈGE</span>
                        </p>
                    </div>
                    <div class="tel">
                        <p>Tel. : <span class="work">04 375 71 37</span></p>
                        <p>Fax : <span class="fax">+32(0)2 731 76 21</span></p>
                    </div>
                    <p>
                        Mail : <a class="email footer-link" href="mailto:contact@csiangleur.com">contact@csiangleur.com</a>
                    </p>
                </section>
            </div>
        </footer>
    </div>
</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
