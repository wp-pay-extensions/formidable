<?php
/**
 * Plugin Name: Pronamic Pay Formidable Forms Add-On
 * Plugin URI: https://www.pronamic.eu/plugins/pronamic-pay-formidable-forms/
 * Description: Extend the Pronamic Pay plugin with Formidable Forms support to receive payments through a variety of payment providers.
 *
 * Version: 4.4.3
 * Requires at least: 4.7
 * Requires PHP: 7.4
 *
 * Author: Pronamic
 * Author URI: https://www.pronamic.eu/
 *
 * Text Domain: pronamic-pay-formidable-forms
 * Domain Path: /languages/
 *
 * License: GPL-3.0-or-later
 *
 * Requires Plugins: pronamic-ideal, formidable
 * Depends: wp-pay/core
 *
 * GitHub URI: https://github.com/pronamic/wp-pronamic-pay-formidable-forms
 *
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2024 Pronamic
 * @license   GPL-3.0-or-later
 * @package   Pronamic\WordPress\Pay\Extensions\FormidableForms
 */

add_filter(
	'pronamic_pay_plugin_integrations',
	function ( $integrations ) {
		foreach ( $integrations as $integration ) {
			if ( $integration instanceof \Pronamic\WordPress\Pay\Extensions\FormidableForms\Extension ) {
				return $integrations;
			}
		}

		$integrations[] = new \Pronamic\WordPress\Pay\Extensions\FormidableForms\Extension();

		return $integrations;
	}
);
