<div class="nav-container">
    <div class="header-container">
        <div class="header-titles">
            <a href="/"><img class="<?php if(wp_is_mobile()) { ?>site-logo-mobile<?php } ?>" alt="<?php echo get_bloginfo( 'name' ); ?>" src="<?php echo get_template_directory_uri(); ?>/images/logos/logo.png"></a>
        </div>

        <div class="header-navigation-wrapper">

            <nav class="primary-menu-wrapper desktop-display" aria-label="Menu">
                <ul> 
                    <?php
                        wp_nav_menu( array(
                        'theme_location' => 'primary', 
                        'container'     => false, 
                        'link_before'   => '<span itemprop="name">', 
                        'link_after'    => '</span>',
                        'container'     => ''
                        ) );
                    ?>
                </ul>
            </nav>


            <!-- Search toggle button -->    
            <div class="header-toggles hide-no-js">
                <div class="toggle-wrapper <?php if(wp_is_mobile()) { ?>search-toggle-wrapper<?php } ?>">
                    <button onclick="revealFunction()" class="toggle search-toggle desktop-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
                        <span class="toggle-inner">
                            <span class="toggle-text"><img src="<?php echo get_template_directory_uri(); ?>/images/icons/search-icon.svg"></span>
                        </span>
                    </button>
                </div>
            </div>

            <div class="mobile-display">
                <span onclick="revealMenuFunction()" class="toggle-nav">
                    <span class="menu-01"></span>
                    <span class="menu-02"></span>
                    <span class="menu-03"></span>
                </span>
                <?php get_template_part('inc/header/mobile-nav'); ?>
                
            </div>

        </div>

        <div class="search-header">
            <?php get_search_form(); ?>
        </div>
    </div>
</div>

