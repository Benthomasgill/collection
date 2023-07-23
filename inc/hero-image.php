<?php if(wp_is_mobile()) { ?>
    <img class="main-hero-image" src="<?php echo get_template_directory_uri(); ?>/images/placeholder/mobile_hero.jpg">
<?php } else { ?>
    <img class="main-hero-image" src="<?php echo get_template_directory_uri(); ?>/images/placeholder/desktop_hero.jpg">
<?php } ?>