<?php
/**
 * Plugin Name: AQPago - Payment for WooCommerce
 * Plugin URI: https://github.com/aqbank/aqpago-woocommerce
 * Description: integração com sistema de pagamento da AQPago, pagamento com cartão de crédito, pagamento com 2 cartões de crédito, pagamento com cartão de crédito e boleto e pagamento com boleto. Venda parcelado em até 12X no cartão para seu cliente e tenha o dinheiro em sua conta com 1 dia, taxas justas e sem surpresas!
 * Version: 1.0.1
 * Author: AQPago
 * Author URI: https://www.aqpago.com.br
 * Text Domain: aqpago
 * Domain Path: /i18n/languages/
 * Requires at least: 5.6
 * Requires PHP: 7.0
 * WC requires at least: 3.0.0
 * WC tested up to:      6.1.1
 *
 * AQPago - Payment for WooCommerce is free software: you can
 * redistribute it and/or modify it under the terms of the
 * GNU General Public License as published by the Free Software Foundation,
 * either version 2 of the License, or any later version.
 *
 * You should have received a copy of the GNU General Public License
 * along with AQPago - Payment for WooCommerce. If not, see
 * <https://www.gnu.org/licenses/gpl-2.0.txt>.
 *
 * @package AQPago
 */

defined( 'ABSPATH' ) || exit;

// Plugin constants.
define( 'WC_AQPAGO_VERSION', '1.0.1' );
define( 'WC_AQPAGO_PLUGIN_FILE', __FILE__ );
define( 'WC_AQPAGO_PLUGIN_DIR', __DIR__ );

if ( ! class_exists( 'WC_Aqpago' ) ) {
	include_once plugin_dir_path(__FILE__) . 'includes/Aqpago.php';
	add_action( 'plugins_loaded', array( 'WC_Aqpago', 'init' ) );
}
