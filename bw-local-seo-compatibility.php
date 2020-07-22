<?php
/*
 * Plugin Name: Local SEO Compatibility
 * Description: Customize settings for Yoast Local SEO.
 * Author: BigWing
 * Version: 1.0.0
 * Author URI: https://bigwing.com
 */

// Removes '/blog/' from the URL on location pages.
add_filter( 'yoast_seo_local_cpt_with_front', '__return_false' );
