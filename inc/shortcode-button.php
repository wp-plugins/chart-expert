<?php
function my_add_mce_button() {

	if ( !current_user_can( 'edit_posts' ) && !current_user_can( 'edit_pages' ) ) {
		return;
	}

	if ( 'true' == get_user_option( 'rich_editing' ) ) {
		add_filter( 'mce_external_plugins', 'my_add_tinymce_plugin' );
		add_filter( 'mce_buttons', 'my_register_mce_button' );
	}
}
add_action('admin_head', 'my_add_mce_button');


function my_add_tinymce_plugin( $plugin_array ) {
	$plugin_array['my_mce_button'] = PMZEZ_PAGE_CHART_EXPERT_PATH .'inc/js/pmzez-chart-expert-button.js';
	return $plugin_array;
}


function my_register_mce_button( $buttons ) {
	array_push( $buttons, 'my_mce_button' );
	return $buttons;
}

