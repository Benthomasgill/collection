<?php

/* sets hero image on pages, if not set defaults to images listed below */

if ( has_post_thumbnail() ) {
    $desktop_hero   = get_the_post_thumbnail_url(get_the_ID(),'desktop-hero'); 
    $mobile_hero    = get_the_post_thumbnail_url(get_the_ID(),'mobile-hero'); 
} else {
    $desktop_hero   = get_template_directory_uri() . '/images/default-desktop.jpg';
    $mobile_hero    = get_template_directory_uri() . '/images/default-mobile.jpg';
}
?>
<!--/ Start Hero Container /-->
<div class="inner-hero-container">

    <?php if(!wp_is_mobile()) {?>
        <img src="<?php echo $desktop_hero; ?>" alt="<?php echo get_the_title(); ?>" />
    <?php } ?>

    <?php if(wp_is_mobile()) {?>
        <img src="<?php echo $mobile_hero; ?>" alt="<?php echo get_the_title(); ?>" />
    <?php } ?>
    
    <div class="container">
        <h1 itemprop="headline">
            <?php echo get_the_title(); ?>
        </h1>
    </div>
</div>
<!--/ End Hero Container /-->