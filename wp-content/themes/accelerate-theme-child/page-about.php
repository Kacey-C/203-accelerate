<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
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

        <div class="about-services">
            <?php while ( have_posts() ) : the_post();
                $our_services = get_field("our_services");
                $our_services_brief = get_field("our_services_brief");
                $service_title_1 = get_field("service_title_1");
                $service_description_1 = get_field("service_description_1");
                $service_image_1 = get_field("service_image_1"); 
                $service_title_2 = get_field("service_title_2");
                $service_description_2 = get_field("service_description_2");
                $service_image_2 = get_field("service_image_2"); 
                $service_title_3 = get_field("service_title_3");
                $service_description_3 = get_field("service_description_3");
                $service_image_3 = get_field("service_image_3"); 
                $service_title_4 = get_field("service_title_4");
                $service_description_4 = get_field("service_description_4");
                $service_image_4 = get_field("service_image_4"); 
                $size = "full";
            ?>   
	    <div class="about-services">
            <div class="services-brief">
                <h3><?php echo $our_services; ?></h3>
                <p><?php echo $our_services_brief; ?></p>
            </div>
            <div class="service-1">
                <div class="service-1-img">
                    <?php if($service_image_1) { 
				        echo wp_get_attachment_image( $service_image_1, $size );
			        } ?>
                </div>
                <div class="service-1-text">
    	            <h2><?php echo $service_title_1; ?></h2>
                    <p><?php echo $service_description_1; ?></p>
                </div>
            </div>
            <div class="service-2">
    	        <h2><?php echo $service_title_2; ?></h2>
                <p><?php echo $service_description_2; ?></p>
                <?php if($service_image_2) { 
				        echo wp_get_attachment_image( $service_image_2, $size );
			        } ?>
            </div>
            <div class="service-3">
    	        <h2><?php echo $service_title_3; ?></h2>
                <p><?php echo $service_description_3; ?></p>
            </div>
            <div class="service-4">
    	        <h2><?php echo $service_title_4; ?></h2>
                <p><?php echo $service_description_4; ?></p>
            </div>

        </div> 

        <div class="work-with-us">
            <h2 class="work-with-us-text">Interested in working with us?</h2>
            <a class="button" href="<?php echo site_url('/contact-us') ?>">Contact Us</a>
        </div>

		<?php endwhile; // end of the loop. ?>
      

	

	</div><!-- #primary -->

<?php get_footer(); ?>