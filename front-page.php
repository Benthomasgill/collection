<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
get_header();
?>

<img src="https://placehold.co/1600x700">

<div class="container">
    <?php get_template_part('inc/hero-image'); ?>
    
    
    <!-- <div class="overlay-hero">
        <img id="star" src="<?php echo get_template_directory_uri(); ?>/images/starElement.png">
        <p>Copy Callout</p>
    </div> -->
    <div id="banner">
        <p id="text">Animated banners are a popular way to grab the attention of viewers and convey important information or promotions on a website. They typically use a combination of HTML, CSS, and JavaScript to create an animation that loops continuously. This can include scrolling text, moving images, or other types of animation. Animated banners are often placed prominently on a website, such as at the top of a page or in a sidebar, to increase visibility. They can be used to promote sales, upcoming events, or to showcase new products or services. Additionally, animated banners can be used to direct visitors to specific pages or sections of a website. They are also useful to convey information quickly, like stock prices, news, weather, etc. Overall, animated banners are an effective way to convey important information and grab the attention of viewers, making them an important tool for website design and marketing.</p>
    </div>

    <p class="wavy-text"></p>

    <?php get_template_part('inc/hero-image'); ?>
    <?php get_template_part('inc/hero-image'); ?>
    <?php get_template_part('inc/hero-image'); ?>
    <?php // get_template_part('inc/blog'); ?>
</div>


<?php
get_footer(); ?>

