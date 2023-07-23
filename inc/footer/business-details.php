<!--/ Start Business Details /-->
<div class="business">


    <meta itemprop="priceRange" content="Please contact us for details" />
    <meta itemprop="currenciesAccepted" content="AU" />

    <div itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
        <meta itemprop="streetAddress" content="<?php echo primary_details()['street_address']; ?>" />
        <meta itemprop="addressLocality" content="<?php echo primary_details()['suburb']; ?>" />
        <meta itemprop="addressRegion" content="<?php echo primary_details()['state']; ?>" />  
        <meta itemprop="postalCode" content="<?php echo primary_details()['postcode']; ?>" />
        <meta itemprop="addressCountry" content="<?php echo primary_details()['country']; ?>" />
    </div>

    <meta itemprop="openingHours" content="<?php echo primary_details()['opening_hours_weekdays']; ?>" />
    <meta itemprop="openingHours" content="<?php echo primary_details()['opening_hours_saturday']; ?>" />
    <meta itemprop="openingHours" content="<?php echo primary_details()['opening_hours_sunday']; ?>"/>

    <meta itemprop="hasMap" content="<?php echo primary_details()['map_link']; ?>" />

    <meta itemprop="telephone" content="<?php echo primary_details()['phone']; ?>" />
    <meta itemprop="email" content="<?php echo primary_details()['email']; ?>" />
    <meta itemprop="url" content="<?php echo home_url(); ?>" />
</div>
<!--/ End Business Details /-->