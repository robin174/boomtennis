<?php
/**
* Displays all of the <head> section and everything up till <div id="main">
* @package boomtennis
*/ 
?>
		</main><!-- end main -->
		<footer>
			<div class="container">
				<section class="footer-layer01">
	                <div class="row">
	                	<div class="col-12 col-md-4">
	                		<figure class="footer-logo">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/BoomLogo-Green-Outlined.svg"/></a>
							</figure>
	                	</div>
	                	<div class="col-12 col-md">&nbsp;
							<?php /* This one should be to the right of the other columns
							<div class="mol__unit-contact">
								<h4>The Legal stuff</h4>
								<ul>
									<li><a href="">Privacy Policy</a></li>
								</ul>
							</div>
							*/ ?>
						</div>
	                	<div class="col-12 col-md">
							<div class="mol__unit-contact">
								<h4>Follow us</h4>
								<ul>
									<?php if (is_single()): ?>
										<?php if(get_field('location_instagram')) { ?>
											<li><a href="https://instagram.com/<?php the_field('location_instagram');?>" target="_blank">Instagram - <?php the_field('location_shortname');?></a></li>
										<?php } else { ?>
											<li><a href="https://www.instagram.com/boomtennisredhill/" target="_blank">Instagram - Boom Tennis</a></li>
										<?php } ?>

										<?php if(get_field('location_facebook')) { ?>
											<li><a href="https://facebook.com/<?php the_field('location_facebook');?>" target="_blank">Facebook - <?php the_field('location_shortname');?></a></li>
										<?php } else { ?>
											<li><a href="https://www.facebook.com/BoomRedhill" target="_blank">Facebook - Boom Tennis</a></li>
										<?php } ?>

										<?php if(get_field('location_twitter')) { ?>
											<li><a href="https://twitter.com/<?php the_field('location_twitter');?>" target="_blank">X - <?php the_field('location_shortname');?></a></li>
										<?php } else { ?>
											<li><a href="https://twitter.com/boom_redhill" target="_blank">X - Boom Tennis</a></li>
									<?php endif; ?>
									<li><a href="<?php the_field('bt_youtube', 'option'); ?>" target="_blank">YouTube</a></li>
								</ul>
							</div>
						</div>
						<div class="col-12 col-md">
							<div class="mol__unit-contact">
								<h4>Contact us</h4>
								<ul>
									<li><a href="mailto:hello@boomtennis.co.uk">hello@boomtennis.co.uk</a></li>
									<li>07950 802 770</li>
									<li>Boom Tennis<br/>
										Redhill Lawn Tennis Club<br>
										Linkfield Lane<br>
										Redhill<br>
										RH1 1JW</li>
								</ul>
							</div>
						</div>
	                </div>
               	</section>

                <section class="footer-layer02">
	                <div class="row">
	                	<div class="col-12 col-md order-md-2">
							<div class="mol__unit-mailchimp">
								<div class="row g-0">
									<!-- Add this to the WordPress admin -->
									<?php /*
									<div class="col-12 col-md-6">
										<div class="unit--mc-intro">
											Subscribe to the Boom Tennis email
										</div>
									</div>
									<!-- <div class="col-6" class="unit--mc-input">Enter your email (needs to be input)</div> -->
									<div class="col-12 col-md-6">
										<input class="unit--mc-input" placeholder="Enter your email">
									</div>
									*/ ?>
								</div>
							</div>
	                	</div>

	                	<div class="col-12 col-md-4 order-md-1">
	                		<p class="atm-copyright">&copy;&nbsp;<?php echo date('Y'); ?>&nbsp;<?php the_field('bt_company', 'option'); ?><br>
	       					All rights reserved.</p>
	       					<p class="atm-copyright"><a href="https://indd.adobe.com/view/1e7bd97a-2e9d-40a4-bcca-09ba3b120a8e" target="_blank" title="Caba Consultancy">Website designed by Caba Consultancy</a></p>
	                		</div>
	                </div>
                </section>

                
            </div>
		</footer>

		<?php /* column design - tweaked to allow extra space for copyright/credit
		<footer>
			<div class="container">
                <div class="row">
                	<div class="col-12 col-md-2">
                		<figure class="footer-logo">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/BoomLogo-Green-Outlined.svg"/></a>
						</figure>
                	</div>
                	<div class="col-12 col-md-10">
                		<div class="row">
							<div class="col-12 col-md-3 offset-md-3">
								<div class="mol__unit-contact">
									<h4>Follow us</h4>
									<ul>
										<li><a href="">Instagram</a></li>
										<li><a href="">Twitter</a></li>
										<li><a href="">Facebook</a></li>
									</ul>
								</div>
							</div>
							<div class="col-12 col-md-3">
								<div class="mol__unit-contact">
									<h4>Contact us</h4>
									<ul>
										<li><a href="mailto:hello@boomtennis.co.uk">hello@boomtennis.co.uk</a></li>
										<li>07950 802 770</li>
										<li>Boom Tennis<br/>
											Redhill Lawn Tennis Club<br>
											Linkfield Lane<br>
											Redhill<br>
											RH1 1JW</li>
									</ul>
								</div>
							</div>
							<div class="col-12 col-md-3">
								<div class="mol__unit-contact">
									<h4>The Legal stuff</h4>
									<ul>
										<li><a href="">Privacy Policy</a></li>
									</ul>
								</div>
							</div>
                		</div>
                	</div>
                </div>
                <section style="margin-top: 70px;"><!-- Add to css -->
	                <div class="row">
	                	<div class="col-12 col-md-10 order-md-2">
	                		<div class="row">
								<div class="col-12 col-md-9 offset-md-3">
									<div class="mol__unit-contact">
										<div class="row">
											<!-- Add this to the WordPress admin -->
											<div class="col-6" style="background-color:#76bc21;padding:5px 10px;color:#fff;">Subscribe to the Boom Tennis email</div><!-- Add to css -->
											<div class="col-6" style="background-color:#fff;padding:5px 10px;color:#76bc21;">Enter your email (needs to be input)</div><!-- Add to css -->
										</div>
									</div>
								</div>
	                		</div>
	                	</div>
	                	<div class="col-12 col-md-2 order-md-1">
	                		<p class="copyright">&copy;&nbsp;<?php echo date('Y'); ?>&nbsp;Boom Tennis Ltd.<br>
	       					All rights reserved.<br>
	       					<a href="https://indd.adobe.com/view/1e7bd97a-2e9d-40a4-bcca-09ba3b120a8e" target="_blank" title="Caba Consultancy">Website designed by Caba Consultancy</p>     		
	                	</div>
	                </div>
                </section>
            </div>
		</footer>
		*/ ?>
		<?php wp_footer(); ?>
	</body>
</html>