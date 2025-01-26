<?php if(!wp_is_mobile()) { ?>
    <div class="hero_banner">
        <div class="overlay">
            <h1>Hero Image With Overlay</h1>
            <p>A full width background image with text overlay</p>
        </div>
    </div>
<?php } else { ?>
    <img class="main-hero-image" src="<?php echo get_template_directory_uri(); ?>/images/placeholder/desktop_hero.jpg">
<?php } ?>

