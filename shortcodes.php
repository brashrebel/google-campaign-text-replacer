<?php
//Replace wrapped text with campaign name
function gctr_name( $atts, $content = null ) {
global $add_gctr_script;
$add_gctr_script = true;
return '<span class="gctr-name">'.$content.'</span>';
}
add_shortcode( 'gctr_name', 'gctr_name');

//Replace wrapped text with campaign term
function gctr_term( $atts, $content = null ) {
global $add_gctr_script;
$add_gctr_script = true;
return '<span class="gctr-term">'.$content.'</span>';
}
add_shortcode( 'gctr_term', 'gctr_term');

//Replace wrapped text with campaign content
function gctr_content( $atts, $content = null ) {
global $add_gctr_script;
$add_gctr_script = true;
return '<span class="gctr-content">'.$content.'</span>';
}
add_shortcode( 'gctr_content', 'gctr_content');

//Replace wrapped text with campaign medium
function gctr_medium( $atts, $content = null ) {
global $add_gctr_script;
$add_gctr_script = true;
return '<span class="gctr-medium">'.$content.'</span>';
}
add_shortcode( 'gctr_medium', 'gctr_medium');

//Replace wrapped text with campaign source
function gctr_source( $atts, $content = null ) {
global $add_gctr_script;
$add_gctr_script = true;
return '<span class="gctr-source">'.$content.'</span>';
}
add_shortcode( 'gctr_source', 'gctr_source');
?>