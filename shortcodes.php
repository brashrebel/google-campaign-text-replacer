<?php
//Replace wrapped text with campaign name
function gctr_name( $atts, $content = null ) {
$utm_name = $_REQUEST['utm_campaign'];
if (!empty($utm_name)) { return $utm_name; }
else { return $content; }
}
add_shortcode( 'gctr_name', 'gctr_name');

//Replace wrapped text with campaign term
function gctr_term( $atts, $content = null ) {
$utm_term = $_REQUEST['utm_term'];
if (!empty($utm_term)) { return $utm_term; }
else { return $content; }
}
add_shortcode( 'gctr_term', 'gctr_term');

//Replace wrapped text with campaign content
function gctr_content( $atts, $content = null ) {
$utm_content = $_REQUEST['utm_campaign'];
if (!empty($utm_content)) { return $utm_content; }
else { return $content; }
}
add_shortcode( 'gctr_content', 'gctr_content');
?>