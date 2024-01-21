<?php
/**
* The template for displaying a single location
* @package boomtennis
*/
get_header(); ?>

<section class="templ--page-main">
	<?php get_template_part('template-parts/unit-header'); ?>
	<section class="mol--page-main">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-md-12">
					<div class="text-center">
						<h1 class="text--shadow location--small"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>&nbsp;&#64;&nbsp;<?php the_title(); ?></h1>
						<section>
							<?php if(get_field('location_teamup') === 'embedhorley') : ?>
								<?php get_template_part('template-parts/unit-teamup-horley'); ?>
							<?php elseif(get_field('location_teamup') === 'embedreedham') : ?>
								<?php get_template_part('template-parts/unit-teamup-reedham'); ?>
							<?php elseif(get_field('location_teamup') === 'embedredhill') : ?>
								<?php get_template_part('template-parts/unit-teamup-redhill'); ?>
							<?php elseif(get_field('location_teamup') === 'embedgodstone') : ?>
								<?php get_template_part('template-parts/unit-teamup-godstone'); ?>
							<?php endif; ?>
						</section>
					</div>
				</div>
			</div>
		</div>
	</section>
</section>

<?php get_footer(); ?>