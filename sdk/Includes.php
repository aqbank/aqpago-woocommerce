<?php
/** load SDK without autload function **/

require_once( dirname( __FILE__ ) . '/SellerAqpago.php' );
require_once( dirname( __FILE__ ) . '/Environment.php' );
require_once( dirname( __FILE__ ) . '/AqpagoEnvironment.php' );


require_once( dirname( __FILE__ ) . '/Aqpago/Request/Environment.php' );
require_once( dirname( __FILE__ ) . '/Aqpago/Request/AqpagoEnvironment.php' );
require_once( dirname( __FILE__ ) . '/Aqpago/Request/AbstractRequest.php' );

require_once( dirname( __FILE__ ) . '/Aqpago/Request/Exceptions/AqpagoRequestException.php' );
require_once( dirname( __FILE__ ) . '/Aqpago/Request/Exceptions/AqpagoError.php' );

require_once( dirname( __FILE__ ) . '/Aqpago/Request/Order/UpdateOrderRequest.php' );
require_once( dirname( __FILE__ ) . '/Aqpago/Request/Order/QueryOrderRequest.php' );
require_once( dirname( __FILE__ ) . '/Aqpago/Request/Order/CreateOrderRequest.php' );
require_once( dirname( __FILE__ ) . '/Aqpago/Request/Order/CancelOrderRequest.php' );

require_once( dirname( __FILE__ ) . '/Aqpago/Request/Webhook/QueryWebhooksRequest.php' );
require_once( dirname( __FILE__ ) . '/Aqpago/Request/Webhook/CreateWebhookRequest.php' );

/** First **/
require_once( dirname( __FILE__ ) . '/Aqpago/AqpagoSerializable.php' );

require_once( dirname( __FILE__ ) . '/Aqpago/UpdateOrder.php' );
require_once( dirname( __FILE__ ) . '/Aqpago/Shipping.php' );
require_once( dirname( __FILE__ ) . '/Aqpago/Phones.php' );
require_once( dirname( __FILE__ ) . '/Aqpago/Payment.php' );
require_once( dirname( __FILE__ ) . '/Aqpago/Order.php' );
require_once( dirname( __FILE__ ) . '/Aqpago/Items.php' );
require_once( dirname( __FILE__ ) . '/Aqpago/Customer.php' );
require_once( dirname( __FILE__ ) . '/Aqpago/CreditCard.php' );

require_once( dirname( __FILE__ ) . '/Aqpago/Aqpago.php' );
require_once( dirname( __FILE__ ) . '/Aqpago/Address.php' );
require_once( dirname( __FILE__ ) . '/Aqpago/Webhook.php' );
