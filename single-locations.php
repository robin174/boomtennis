<?php
/**
* The template for displaying a single location
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
							<h1 class="type--brand text--shadow"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>&nbsp;&#64;&nbsp;<?php the_title(); ?></h1>
							<section>
								<?php get_template_part('template-parts/unit-teamup'); ?>
							</section>
						</div>
					</div>
				</div>
			</div>
		</section>
	</section>

<?php get_footer(); ?>