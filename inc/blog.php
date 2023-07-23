<?php if(is_front_page()) {
        $ppp = 2;
    } else {
        $ppp = 1;
    }
    $args = array(
        'post_type'         => 'post',
        'orderby'           => 'date',
        'order'             => 'desc',
        'posts_per_page'    => $ppp
    );
    $query = new WP_Query($args);
    while ($query->have_posts()) : $query->the_post(); ?>
        
        <li class="latest-blog">
            <a href="<?php echo get_the_permalink(); ?>">
                <span class="pos">
                    <small>Latest Blog</small>
                    <strong><?php echo the_title(); ?></strong>   
                    <p><?php echo wp_trim_words( get_the_content(), 15, '...' ); ?></p>
                    <span class="button-link white-blue">Keep Reading</span> 
                </span>    
                <img src="<?php echo get_the_post_thumbnail_url( $post_id, 'large' ); ?>" alt="<?php echo the_title(); ?>" class="loading" />
            </a>
        </li>

    <?php endwhile;
    wp_reset_postdata();
    ?>