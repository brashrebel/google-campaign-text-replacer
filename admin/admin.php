<?php
//Add the menu under Tools
add_action("admin_menu","gctr_menu");

function gctr_menu() {
	add_submenu_page("options-general.php","Google Campaign Text Replacer", "Campaign Text", "manage_options","google-campaign-text-replacer", "gctr_body_fcn");
}

/*------------------
Create admin page
-------------------*/
function gctr_body_fcn() { 
	?>
<div class="wrap">
	<div id="icon-options-general" class="icon32">
		<br>
	</div>
	<h2>Google Campaign Text Replacer</h2>
<p>
	This plugin will be great.
</p>
</div>
<?php }
?>