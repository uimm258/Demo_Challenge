<?php
/**
 * Plugin Name: Follow Us Plugin
 * Description: Add a follow us only when a single post is displayed
 */

 // Add a follow us only when a single post is displayed
 function wpb_follow_us($content) {
    if ( is_single() ) { 

        // Add URLs to your own Twitter and Facebook profiles     
        $content .= '<p class="follow-us">If you liked this article, then please follow us on <a href="https://twitter.com/WellbornCabinet" title="WellbornCabinet on Twitter" target="_blank" rel="nofollow">Twitter</a> and <a href="https://www.facebook.com/WellbornCabinetInc/" title="WellbornCabinet on Facebook" target="_blank" rel="nofollow">Facebook</a>.</p>'; 
    } 

    return $content;      
 }

 add_filter('the_content', 'wpb_follow_us'); 