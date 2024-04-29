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
						<section style="padding: 20px 0;">
							<?php if( have_rows('pdf_repeater') ): ?>
								<div class="row justify-content-center">
									<?php while( have_rows('pdf_repeater') ): the_row(); ?>
										<div class="col-12 col-lg-4">

											<section class="mol--section-pdf d-flex">
												<div style="padding-right: 10px;">
													<i class="fa-sharp fa-3x fa-file-pdf"></i>
												</div>
												<div>
													<h4><?php the_sub_field('pdf_title'); ?></h4>
													<?php if (get_sub_field('pdf_file')): ?>
														<div class="d-flex">
															<a class="atm--button-signup me-auto" href="<?php the_sub_field('pdf_file'); ?>" target="_blank">View PDF</a>
														</div>
													<?php else : ?>
														<p class="atm-nofile">There is currently no PDF available to view.</p>
													<?php endif; ?>
												</div>
											</section>

										</div>
									<?php endwhile; ?>
								</div>
							<?php endif; ?>
						</section>
						<section>
							<?php if(get_field('location_teamup') === 'embedhorley') : ?>
								<?php get_template_part('template-parts/unit-teamup-horley'); ?>
							<?php elseif(get_field('location_teamup') === 'embedhorleyeadults') : ?>
								<?php get_template_part('template-parts/unit-teamup-horley-adults'); ?>
							<?php elseif(get_field('location_teamup') === 'embedhorleyjuniors') : ?>
								<?php get_template_part('template-parts/unit-teamup-horley-juniors'); ?>
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