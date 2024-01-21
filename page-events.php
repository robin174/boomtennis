<?php
/**
* Template Name: Page - Events
* @package boomtennis
*/

get_header(); ?>

<section class="templ--page-main">
	<?php get_template_part('template-parts/unit-header'); ?>
	<section class="mol--page-main">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-md-8">

					<section class="org--section-events">
                        <section class="mol--section-events-upcoming">
                            <h2>Upcoming Competitions</h2>
                            <div class="block--section-events">
                                 <?php 
                                    $today = date('Ymd');
                                    $today = date('Ymd', mktime(0, 0, 0, date("m"), date("d")-1, date("Y"))); // less one day to show day after event date
                                    $args = array (
                                        'post_type' => 'events',
                                        'post_status' => 'publish', // only show published events
                                        'orderby' => 'meta_value', // order by date
                                        'meta_key' => 'date_select', // your ACF Date & Time Picker field
                                        'meta_value' => $today, // Use the current time from above
                                        'meta_compare' => '>=', // Compare today's datetime with our event datetime
                                        'order' => 'ASC',
                                        );
                                    $query = new WP_Query( $args );
                                    if ( $query->have_posts() ) :
                                    while ( $query->have_posts() ) : $query->the_post(); ?>
                                        <?php get_template_part('template-parts/unit-event-upcoming'); ?>
                                    <?php endwhile; else : ?>
                                        <p class="emph"><i class="fa-solid fa-triangle-exclamation"></i>There are currently no upcoming competitions to show.</p>
                                <?php endif; wp_reset_postdata(); ?>
                            </div>
                        </section>
                        <?php /*
                        A nice bit of code determining which event is seen per section
                        <section class="mol--section-events-upcoming">
                            <h2>Upcoming Competitions</h2>
                            <div class="block--section-events">
                                <?php $custom_terms = get_terms('holiday', array(
                                    'hide_empty' => false,
                                ));
                                foreach($custom_terms as $custom_term) {
                                    wp_reset_query();
                                    $today = date('Ymd');
                                    $args = array(
                                        'post_type' => 'events',
                                        'post_status' => 'publish',
                                        'orderby' => 'meta_value',
                                        'meta_key' => 'date_select', // your ACF Date & Time Picker field
                                        'meta_value' => $today, // Use the current time from above
                                        'meta_compare' => '>=', // Compare today's datetime with our event datetime
                                        'order' => 'ASC',
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => 'holiday',
                                                'field' => 'slug',
                                                'terms' => $custom_term->slug,
                                            ),
                                        ),
                                     );
                                     $loop = new WP_Query($args);
                                     if($loop->have_posts()) {
                                        echo '<h4 class="ut--holiday">'.$custom_term->name.'</h4>';
                                        while($loop->have_posts()) : $loop->the_post(); ?>
                                            <?php get_template_part('template-parts/unit-event-upcoming'); ?>
                                        <?php endwhile;
                                     } else {
                                        echo '<h4 class="ut--holiday">'.$custom_term->name.'</h4>';
                                        echo '<p class="text-center emph"><i class="fa-solid fa-triangle-exclamation"></i>There are currently no upcoming competitions during the '.$custom_term->name.'.</p>';
                                    }} ?>
                            </div>
                        </section>
                        */ ?>
                        <?php /*
                        <section>
                            <h2>Recent Events</h2>
                            <div class="block--section-events">
                                <?php 
                                    $today = date('Ymd');
                                    $today = date('Ymd', mktime(0, 0, 0, date("m"), date("d")-1, date("Y"))); // less one day to show day after event date
                                    $args = array (
                                        'post_type' => 'events',
                                        'post_status' => 'publish', // only show published events
                                        'orderby' => 'meta_value', // order by date
                                        'meta_key' => 'date_select', // your ACF Date & Time Picker field
                                        'meta_value' => $today, // Use the current time from above
                                        'meta_compare' => '<=', // Compare today's datetime with our event datetime
                                        'order' => 'ASC',
                                        );
                                    $query = new WP_Query( $args );
                                    if ( $query->have_posts() ) :
                                    while ( $query->have_posts() ) : $query->the_post(); ?>
                                        <?php get_template_part('template-parts/unit-event-recent'); ?>
                                    <?php endwhile; else : ?>
                                        <p class="emph"><i class="fa-solid fa-triangle-exclamation"></i>There are currently no recent competitions to show.</p>
                                <?php endif; wp_reset_postdata(); ?>
                            </div>
                        </section>
                        */ ?>
                    </section>

				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>