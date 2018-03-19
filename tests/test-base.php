<?php
/**
 * Graphql_wp_plugin.
 *
 * @since   0.0.1
 * @package Graphql_wp_plugin
 */
class Graphql_wp_plugin_Test extends WP_UnitTestCase {

	/**
	 * Test if our class exists.
	 *
	 * @since  0.0.1
	 */
	function test_class_exists() {
		$this->assertTrue( class_exists( 'Graphql_wp_plugin') );
	}

	/**
	 * Test that our main helper function is an instance of our class.
	 *
	 * @since  0.0.1
	 */
	function test_get_instance() {
		$this->assertInstanceOf(  'Graphql_wp_plugin', graphql_wp_plugin() );
	}

	/**
	 * Replace this with some actual testing code.
	 *
	 * @since  0.0.1
	 */
	function test_sample() {
		$this->assertTrue( true );
	}
}
