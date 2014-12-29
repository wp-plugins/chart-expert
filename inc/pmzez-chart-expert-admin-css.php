<?php
function pmzez_chart_expert_load_custom_wp_admin_style() {
        wp_register_style( 'pmzez_chart_expert_custom_wp_admin_css', PMZEZ_PAGE_CHART_EXPERT_PATH . 'inc/css/pmzez-chart-expert-admin-css.css', true, '1.0.0' );
    
        wp_enqueue_style( 'pmzez_chart_expert_custom_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'pmzez_chart_expert_load_custom_wp_admin_style' );