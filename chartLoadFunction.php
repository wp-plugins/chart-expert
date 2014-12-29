<?php
/**
 * @package chart-expert
 * @version 1.0
 */
/*
Plugin Name: chart-expert
Plugin URI: http://pmzez.com/plugins/chart-expert/
Description: C3 makes it easy to generate D3-based charts by wrapping the code required to construct the entire chart. We don't need to write D3 code any more.C3 provides a variety of APIs and callbacks to access the state of the chart. By using them, you can update the chart even if after it's rendered.
Version: 1.0
Author: Rashedul Islam Sagor
Author URI: http://www.pmzez.com
License: GPLv2 or later
Text Domain: chart-expert
*/

/*Plugin Path*/
define('PMZEZ_PAGE_CHART_EXPERT_PATH', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );

/* Adding Latest jQuery from Wordpress */
function pmzez_chart_expert_latest_jquery() {
	wp_enqueue_script('jquery');
}
add_action('init', 'pmzez_chart_expert_latest_jquery');

/* Adding plugin main-css active file -> below jQuery */
function pmzez_chart_expert_main_css_install() {
	wp_enqueue_style('pmzez-chart_expert-c3-css-active', PMZEZ_PAGE_CHART_EXPERT_PATH.'css/c3.css');
	wp_enqueue_style('pmzez-chart_expert-d3-css-active', PMZEZ_PAGE_CHART_EXPERT_PATH.'css/d3.slider.css');
	wp_enqueue_style('pmzez-chart_expert-mystyle-css-active', PMZEZ_PAGE_CHART_EXPERT_PATH.'css/mystyle.css');
}
add_action('init', 'pmzez_chart_expert_main_css_install');

/* Adding plugin main jquery file -> below jQuery */
function pmzez_chart_expert_main_js_install() {
	wp_enqueue_script('pmzez-chart_expert-c3-js-active', PMZEZ_PAGE_CHART_EXPERT_PATH.'js/c3.min.js', array('jquery'));
	wp_enqueue_script('pmzez-chart_expert-d3-js-active', PMZEZ_PAGE_CHART_EXPERT_PATH.'js/d3.min.js', array('jquery'));
	wp_enqueue_script('pmzez-chart_expert-d3-slider-js-active', PMZEZ_PAGE_CHART_EXPERT_PATH.'js/d3.slider.js', array('jquery'));
}
add_action('init', 'pmzez_chart_expert_main_js_install');




include_once('inc/shortcode.php');

include_once('inc/shortcode-button.php');

include_once('inc/pmzez-chart-expert-admin-css.php');
