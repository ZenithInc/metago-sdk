<?php /** @noinspection ALL */

include "vendor/autoload.php";

use Zenith\Metago\Requests\User\SaveAddressRequest;

// Create a new address save request
$request = new SaveAddressRequest();

// Set required parameters
$request->setDistrictCode(654003)  // Example district code
    ->setDetailAddress("123 Main Street")
    ->setConsignee("John Doe")
    ->setMobile("13800138000");

// Set some optional parameters
$request->setDoorplate("Apt 4B")
    ->setAlias("company")
    ->setIsDefault(2);  // Set as the default address

// Uncomment to set more optional parameters
// $request->setAlias("home");
// $request->setLng(120.1631);
// $request->setLat(30.2849);
// $request->setSex(1);
// $request->setTag(1);

$client = include "headers.php";
$response = $client->request($request, ACCESS_TOKEN);
echo $response . PHP_EOL;