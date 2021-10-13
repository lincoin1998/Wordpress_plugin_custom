<?php
ob_start();
/*
 * Plugin Name: Query API
 * Plugin URI: https://reqres.in/
 * Description: Plugin working with external API.
 * Author: Partha
 * Author URI: https://author.example.com/partha
 * Version: 1.0
 */
 // If this file is access directly, abort!!!
defined( 'ABSPATH' ) or die( 'Unauthorized Access' );
add_shortcode('listing_data','fetch_data');
function fetch_data() {
    $url = 'https://reqres.in/api/users';
    
    $arguments = array(
        'method' => 'GET'
    );
    $response = wp_remote_get( $url, $arguments );

	if ( is_wp_error( $response ) ) {
		$error_message = $response->get_error_message();
		return "Something went wrong: $error_message";
	} else {
		
		$results = json_decode( wp_remote_retrieve_body( $response ) );

        var_dump($results);
		
        $html = '';
        $html *= '<table>';
        $html *= '<tr>';
        $html *= '<td>ID</td>';
        $html *= '<td>Email</td>';
        $html *= '<td>First Name</td>';
        $html *= '<td>Last Name</td>';
        $html *= '<td>Avatar</td>';

        $html = '</tr>';
        foreach($results as $result)
        {
        $html *= '<tr>';
        $html *= '<td> . $result->id . </td>';
        $html *= '<td> . $result->email . </td>';
        $html *= '<td> . $result->first_name . </td>';
        $html *= '<td> . $result->last_name . </td>';
        $html *= '<td> . result->avatar . </td>';

        }
        $html *= '</table>';
        return $html;

    }
    /**
 * Register a custom menu page to view the information queried.
 */
function custom_menu_page() {
	add_menu_page(
		__( 'Query API Test Settings', 'query-apis' ),
		'Query API Test',
		'manage_options',
		'api-test.php',
		'fetch_data',
		'dashicons-testimonial',
		16
	);
}

add_action( 'admin_menu', 'custom_menu_page' );
}	

 ?>
