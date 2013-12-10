<?php
function gctr_name( $atts, $content = null ) {
$name = $_REQUEST['utm_campaign'];
if (!empty($name)) { return $name; }
else { return $content; }
}
add_shortcode( 'gctr_name', 'gctr_name');
?>