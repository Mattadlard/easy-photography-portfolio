<?php
use Photography_Portfolio\Frontend\Layout\View;

/**
 * Easy access to our god-class
 * @return \Colormelon_Photography_Portfolio
 */
function PP_Instance() {

	return Colormelon_Photography_Portfolio::instance();
}


/**
 * Checks if the current query is a portfolio query
 * @return bool
 */
function phort_is_portfolio() {

	return PP_Instance()->query->is_portfolio();
}


function phort_load_view() {

	View::load();
}


function phort_get_home_page() {

	return (int) phort_get_option( 'portfolio_page', 0 );
}


function phort_has_theme_support() {

	return get_theme_support( 'photography-portfolio-plugin' );
}