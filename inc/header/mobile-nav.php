
<div class="mobile-nav">
    <nav class="primary-menu-wrapper" aria-label="Menu">
        <ul> 
            <li <?php if(is_front_page()) { echo 'class="current-menu-item"'; } ?>>
                <a href="<?php echo home_url();?>/" class="home">Home</a>
            </li>
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
</div>