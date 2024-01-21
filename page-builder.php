<?php
/**
* Template Name: Page - Builder
* @package boomtennis
*/

get_header(); ?>

<section class="templ--page-main">
	<section class="mol--page-main">

		<!-- Page Introduction -->
		<?php if(is_page('retail')) : ?>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-md-8">
						<section class="text-center">
							<h1 class="type--brand-page"><?php the_field('rt_headline'); ?></h1>
							<figure class="mb-5">
								<img src="<?php the_field('rt_logo'); ?>" alt="<?php the_field('rt_partner'); ?>">
							</figure>
							<figure class="mb-5">
								<a href="<?php the_field('rt_url'); ?>" target="_blank" title="<?php the_field('rt_partner'); ?>"><img class="mw-100" src="<?php the_field('rt_visual'); ?>" alt="<?php the_field('rt_partner'); ?>"></a>
							</figure>
						</section>
					</div>
				</div>
			</div>
		<?php else : ?>
			<?php get_template_part('template-parts/unit-introduction'); ?>
		<?php endif; ?>

		<!-- Page Builder -->
		<?php get_template_part ('template-parts/unit-builder'); ?>

		<!-- Tutoring Courses -->
		<?php if(is_page('tutoring')) : ?>
			<?php get_template_part ('template-parts/unit-tutoring'); ?>
		<?php endif; ?>

		<!-- Additional PDFs -->
		<?php get_template_part ('template-parts/unit-pdf'); ?>

	</section>
</section>

<?php if(is_page('about')) : ?>
	<section class="mol-page-separator">
		<div class="container-fluid" style="padding:0;">
			<div class="row justify-content-center g-0">
				<div class="col-12">
					<figure class="text-center">
						<img class="mw-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/use-padel-tennis03.jpg"/>
					</figure>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php get_footer(); ?>