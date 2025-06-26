<?php /** @noinspection ALL */

include "vendor/autoload.php";

use Zenith\Metago\Requests\User\CertVerifyRequest;

// Create a new cert verify request
$request = new CertVerifyRequest();

// Set required parameters
$request->setAccountType(3)  // 3 = 个人
    ->setAccountName("Bob Smith")
    ->setCardType(1)  // 1 = 身份证
    ->setIdCardName("季俊潇")
    ->setIdCardNo("330324199407044510");

// Set some optional parameters
$request->setIdCardPositive("https://example.com/id_card_front.jpg")
    ->setIdCardNegative("https://example.com/id_card_back.jpg");

// Uncomment to set more optional parameters
// $request->setLicense("https://example.com/license.jpg");
// $request->setLicenseNo("91330106MA2B2YUQ5X");
// $request->setCardNationality("中国");
// $request->setCardDeadline(1735689600);  // Example timestamp for 2025-01-01

$client = include "headers.php";
$response = $client->request($request, ACCESS_TOKEN);
echo $response . PHP_EOL;