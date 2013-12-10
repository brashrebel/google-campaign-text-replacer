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
<div class="updated">
<b>Note:</b> All shortcodes on this page have spaces before and after square brackets. That is so they don't execute on this page.
Remove the spaces in the shortcodes to make them work on real content.
</div>
	<table class="form-table">
		<tbody>
			<tr valign="top">
				<th scope="row">
	    			<h3>Source</h3>
	    		</th>
	    		<td>
	    			<b>Shortcode:</b> [ gctr_source ]<br/>
	    			If the utm_source parameter is defined in the URL then the value will replace the text wrapped in the shortcode.
	    			<br/><i>Example content:</i> <code>This visitor came from [ gctr_source ]Bing[ /gctr_source ]</code>
	    			<br/><i>Example URL:</i> <code>http://realbigmarketing.com/?utm_source=Google</code>
	    			<br/><i>End result:</i> <code>This visitor came from Google</code>
        		</td>
        	</tr>
			<tr valign="top">
				<th scope="row">
	    			<h3>Medium</h3>
	    		</th>
	    		<td>
	    			<b>Shortcode:</b> [ gctr_medium ]<br/>
	    			If the utm_medium parameter is defined in the URL then the value will replace the text wrapped in the shortcode.
	    			<br/><i>Example content:</i> <code>This visitor clicked on an [ gctr_medium ]E-mail link[ /gctr_medium ]</code>
	    			<br/><i>Example URL:</i> <code>http://realbigmarketing.com/?utm_medium=Banner%20Ad</code>
	    			<br/><i>End result:</i> <code>This visitor clicked on an Banner Ad</code>
        		</td>
        	</tr>
			<tr valign="top">
				<th scope="row">
	    			<h3>Term</h3>
	    		</th>
	    		<td>
	    			<b>Shortcode:</b> [ gctr_term ]<br/>
	    			If the utm_term parameter is defined in the URL then the value will replace the text wrapped in the shortcode.
	    			<br/><i>Example content:</i> <code>This visitor was seeking [ gctr_term ]the meaning of life[ /gctr_term ]</code>
	    			<br/><i>Example URL:</i> <code>http://realbigmarketing.com/?utm_term=a%20good%20time</code>
	    			<br/><i>End result:</i> <code>This visitor was seeking a good time</code>
        		</td>
        	</tr>
			<tr valign="top">
				<th scope="row">
	    			<h3>Content</h3>
	    		</th>
	    		<td>
	    			<b>Shortcode:</b> [ gctr_content ]<br/>
	    			If the utm_content parameter is defined in the URL then the value will replace the text wrapped in the shortcode.
	    			<br/><i>Example content:</i> <code>This visitor clicked on the [ gctr_content ]huge sale[ /gctr_content ] ad</code>
	    			<br/><i>Example URL:</i> <code>http://realbigmarketing.com/?utm_content=black%20Friday</code>
	    			<br/><i>End result:</i> <code>This visitor clicked on the black Friday ad</code>
        		</td>
        	</tr>
			<tr valign="top">
				<th scope="row">
	    			<h3>Campaign name</h3>
	    		</th>
	    		<td>
	    			<b>Shortcode:</b> [ gctr_name ]<br/>
	    			If the utm_name parameter is defined in the URL then the value will replace the text wrapped in the shortcode.
	    			<br/><i>Example content:</i> <code>This visitor came from our [ gctr_name ]plain Jane[ /gctr_name ] campaign</code>
	    			<br/><i>Example URL:</i> <code>http://realbigmarketing.com/?utm_name=viral</code>
	    			<br/><i>End result:</i> <code>This visitor came from our viral campaign</code>
        		</td>
        	</tr>
    	</tbody>
    </table>
</div>
<?php }
?>