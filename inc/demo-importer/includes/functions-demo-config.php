<?php
/**
 * Functions for configuring demo importer.
 *
 * @package Importer/Functions
 * @version 1.0.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * Setup demo importer packages.
 *
 * @deprecated 1.5.0
 *
 * @param  array $packages Demo packages.
 *
 * @return array
 */
function foodhunt_demo_importer_packages( $packages ) {
	$new_packages = array(
		'foodhunt-free' => array(
			'name'    => esc_html__( 'FoodHunt', 'foodhunt' ),
			'preview' => 'https://demo.themegrill.com/foodhunt/',
		),
		'foodhunt-pro'  => array(
			'name'     => esc_html__( 'FoodHunt Pro', 'foodhunt' ),
			'preview'  => 'https://demo.themegrill.com/foodhunt-pro/',
			'pro_link' => 'https://themegrill.com/themes/foodhunt/',
		),
	);

	return array_merge( $new_packages, $packages );
}

add_filter( 'themegrill_demo_importer_packages', 'foodhunt_demo_importer_packages' );
