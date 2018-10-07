<?php
/*
Plugin Name: Daysuntilmybirthday Plugin
*/
function daysuntilmybirthday_shortcodes_init()
{
    function daysuntilmybirthday_shortcode($atts = [], $content = null)
    {
        
$now = time(); //today's' date
//$myupcomingbirthday = strtotime("2018-03-17"); //my upcoming birthday date
$myupcomingbirthday = strtotime('2018-03-17 + 1 year');
$datediff = $myupcomingbirthday - $now;
$content = floor($datediff / (60 * 60 * 24));

return $content;
    }
    add_shortcode('daysuntilmybirthday-plugin', 'daysuntilmybirthday_shortcode');
}
add_action('init', 'daysuntilmybirthday_shortcodes_init');