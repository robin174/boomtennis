<?php
/**
* Template Name: Page - Home
* @package boomtennis
*/

get_header(); ?>

	<section class="templ--page-main">
		<section class="org--page-introduction" style="background:url('<?php echo get_template_directory_uri(); ?>/assets/images/use-boomtennis-header-v2.jpg') center;">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12">
						<figure>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/BoomLogo-GreenBlue-Outlined.svg"/>
						</figure>
					</div>
				</div>
			</div>
		</section>
		<section class="mol--page-main">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-md-12">
						<div class="text-center">
							<h1 class="type--brand text--shadow"><?php the_title(); ?></h1>
							<h2 class="text--shadow"><?php the_field('home_headline'); ?></h2>
							<p class="text--shadow"><?php the_field('home_text'); ?></p>
							<div>
								<?php
						            $args=array(
						 				'post_type' => 'locations',
										'post_status' => 'publish',
										'order' => 'ASC',
						            );
						            $my_query = null;
						            $my_query = new WP_Query($args);
						            if( $my_query->have_posts() ) {
						            	while ($my_query->have_posts()) : $my_query->the_post(); ?>
											<a class="button-location" href="<?php the_permalink(); ?>"><?php the_field('location_shortname');?></a>
										<?php endwhile; }
		        						wp_reset_query(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-md-12">
						<div class="text-center">
							<section>
								<hr>
								<h2 class="text--shadow"><?php the_field('home_app'); ?></h2>
								<div class="d-flex justify-content-center">
									<figure class="m-2 m-md-3">
										<a href="https://apple.co/4d5geRx"><img style="height:54px;" src="<?php the_field('home_app_apple'); ?>" alt="Download on the App Store" /></a>
									</figure>
									<figure class="m-2 m-md-3">
										<a href="https://bit.ly/3zJ5cD4"><img style="height:54px;" src="<?php the_field('home_app_android'); ?>" alt="Get it on Google Play" /></a>
									</figure>
								</div>
								<div>
									<p style="font-size: 0.9rem;margin-top: 10px;margin-bottom:0;color: rgba(255,255,255,0.5);">Powered by</p>
									<figure class="m-3">
										<img style="height:40px;" src="<?php echo get_template_directory_uri(); ?>/assets/images/use-logo-teamup.png" alt="Get it on Google Play" />
									</figure>
								</div>
							</section>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="mol-page-separator">
			<div class="container-fluid" style="padding:0;">
				<div class="row justify-content-center g-0">
					<div class="col-12">
						<figure class="text-center">
							<img class="mw-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/use-renith-unsplash-02-crop-v2.jpg"/>
						</figure>
					</div>
				</div>
			</div>
		</section>
	</section>

<?php get_footer(); ?>