<?php
/**
 * The template for displaying 404 page
 *

 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<section class="page-404">
    <div class="page-404-content">
        <div class="top-404">
            <h1>Uh Oh... 404</h1>
            <h3>Looks like we made a mess</h3>
        </div>
        <div class="bottom-404">
            <p>Sorry, this page no longer exsists, never exsisted, or has been moved. We feel like total jerks for misleading you.</p>
            <h4>Why dont you check out our <a href="<?php echo site_url('/blog')?>">blog</a> or <a href="<?php echo site_url('/archives/case-studies')?>">featured works</a> instead</h4>
        </div>
    </div>
</section>

