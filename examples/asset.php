<?php
require '../php-binance-api.php';
// @see home_directory_config.php
// use config from ~/.confg/jaggedsoft/php-binance-api.json
$api = new Binance\API();
$asset = $api->assetDetail();
print_r($asset);
