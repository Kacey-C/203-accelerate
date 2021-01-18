<?php
/**
 * Template Name: About
 * Template Post Type: post, page
 *
 * This is the template that displays the About page.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

    <div id="primary" class="about-page">
		<div class="about-hero">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
        </div><!-- .main-content -->
    </div><!-- #primary -->
    
    <!-- Services -->

    <section class="services">
        <div class="about-subheading">
            <?php while ( have_posts() ) : the_post();
					$subheading = get_field("subheading");
					$description = get_field("description");
            ?>
                <h3><?php echo $subheading ?></h3>
                <p><?php echo $description ?></p>
            <?php endwhile; // end of the loop ?>
        </div>

        
        <ul class="about-services">
				<?php query_posts('posts_per_page=4&post_type=services'); ?>
				<?php while ( have_posts() ) : the_post();
					$service_image = get_field("service_image");
					$size = "medium";
				?>

				<li class="individual-services">
					<figure class="individual-services-image">
						<?php echo wp_get_attachment_image($service_image, $size); ?>
					</figure>
					<div class="individual-services-text">
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
					</div>
				</li>

				<?php endwhile; // end of the loop ?>
				<?php wp_reset_query(); // resets the altered query back to the original ?>
			</ul>
    </section>

    <section class="about-cta">
        <div class="work-with-us">
            <h2 class="work-with-us-text">Interested in working with us?</h2>
            <a class="button work-with-us-button" href="<?php echo site_url('/contact-us') ?>">Contact Us</a>
        </div>
    </section>

<?php get_footer(); ?>