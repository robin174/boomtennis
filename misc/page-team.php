<?php
/**
* Template Name: Page - Team
* @package boomtennis
*/
get_header(); ?>
	<section class="templ--page-main">
		<?php get_template_part('template-parts/unit-header'); ?>
		<section class="mol--page-main">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-md-9">
						<section>
							<h1 class="type--brand-page"><?php the_field('page_headline'); ?></h1>
							<?php the_field('page_text'); ?>
						</section>
						<section>
							<?php
					            $args=array(
					 				'post_type' => 'team',
									'post_status' => 'publish',
									'order' => 'ASC',
					            );
					            $my_query = null;
					            $my_query = new WP_Query($args);
					            if( $my_query->have_posts() ) {
					            	while ($my_query->have_posts()) : $my_query->the_post(); ?>
										<?php get_template_part('template-parts/unit-team'); ?>
									<?php endwhile; }
	        						wp_reset_query(); ?>
						</section>
					</div>
				</div>
			</div>
		</section>
	</section>
<?php get_footer(); ?>