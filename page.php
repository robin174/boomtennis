<?php
/**
* The template for displaying all pages.
* @package boomtennis
*/

get_header(); ?>

<section class="templ--page-main">
	<?php get_template_part('template-parts/unit-header'); ?>
	<section class="mol--page-main">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-md-8">

					<?php if(is_page('retail')) : ?> 
						<section class="text-center">
							<h1 class="type--brand-page"><?php the_field('tp_headline'); ?></h1>
							<figure class="mb-5">
								<img src="<?php the_field('tp_logo'); ?>" alt="<?php the_title();?>">
							</figure>
							<figure class="mb-5">
								<a href="<?php the_field('tp_url'); ?>" title="<?php the_title();?>"><img class="mw-100" src="<?php the_field('tp_visual'); ?>" alt="<?php the_title();?>"></a>
							</figure>
						</section>
					<?php endif; ?>

					<section>
						<?php if (get_field('page_headline')): ?>
							<h1 class="type--brand-page"><?php the_field('page_headline'); ?></h1>
						<?php endif; ?>
						<?php the_field('page_text'); ?>
					</section>

					<?php if (get_field('add_repeater')): ?>
						<?php if( have_rows('page_repeater') ): ?>
							<?php while( have_rows('page_repeater') ): the_row(); ?>
								<section>
									<h3 class="type--brand-page"><?php the_sub_field('h3_heading'); ?></h3>
									<?php the_sub_field('paragraph_content'); ?>
								</section>
							<?php endwhile; ?>
						<?php endif; ?>
					<?php endif; ?>

					<?php if(is_page('team')) : ?> 
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
					<?php endif; ?>

					<?php if(is_page('about-us')) : ?> 
						<section>
							<span class="ut--green"><?php the_field('download_instruction'); ?></span>
						</section>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>