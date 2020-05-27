<?
/* * * * * * * * * * * * * * * * * * * * * * * 
 *      Configuration for LandingPage:       *
 *              beletage.in.ua               *
 *   Last edition by 24.01.2020, 05:05:42    *
 * * * * * * * * * * * * * * * * * * * * * * */

$valuta = 'грн';
$price_new = '299';
$skidka = '53';
$head_index = '';
$head_thanks = '';
$body_index = '';
$body_thanks = '';
$product = 'Убтан + маска за 299 грн';
$email = 'ubtan@beletage.in.ua';
$product_id = '5';
$comment = '';
$price_old = floor(($price_new/(100-$skidka))*100);



/* PRIMARY*/
define("SITE_NAME", 'ubtan');
define("SITE_URL", 'https://beletage.in.ua/ubtan/2/');

/* RETAIL CRM */
define("RETAIL_CRM_USE", true);	// Использовать отправку заказа в RETAIL CRM
define("RETAIL_CRM_URL", 'https://beletage.retailcrm.ru/');
define("RETAIL_CRM_API_KEY", '8Xm9HCYW7G5SOAoCjIZy7ZBYs9OtBIc2');

$method_delivery = 'novaposhtad1';
$orderMethod = 'landing-page';
$product_retail_offer_id = '213';
$product_retail_id = 'ub00299b';
$receiverCity = 'Киев';
$receiverCityRef = '';
$receiverWarehouseRef = '';


/* monsterleads CRM */
define("MONSTERLEADS_USE", true);	// отправлять или не отправлять лиды (статус true - отправлять, false - не отправлять)
define("MONSTERLEADS_URL", 'http://api.monsterleads.pro');
define("MONSTERLEADS_API_KEY", 'a10f0b411b2b54f62a45dafb00dc7f9b');
$Ml_code = 'ekc5emej'; // код потока
$Ml_product = '37517';


/* * * * * * * * * * * * * * * * * * * * * * * 
 *           Created by ConfigLand           *
 *          Powered by Igor Sayutin          *
 *          http://it-senior.pp.ua           *
 * * * * * * * * * * * * * * * * * * * * * * */

?>
