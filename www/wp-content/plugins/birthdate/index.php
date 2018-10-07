<?php
/*
Plugin Name: Birthdate Plugin
*/
function birthdate_shortcodes_init()
{
    function birthdate_shortcode($atts = [], $content = null)
    {
        $mindate = date("2018-03-17");//my birthdate;
        $content .= $mindate;
       
        return $content;
    }
    add_shortcode('birthdate-plugin', 'birthdate_shortcode');
}
add_action('init', 'birthdate_shortcodes_init');