<?php

namespace Zenith\Metago\Requests\Payment;

use Zenith\Metago\RequestInterface;

/**
 * 账户余额
 */
class GetAccountBalanceRequest implements RequestInterface
{
    const API = '/payment/v1/account/balance';

    public function getApi(): string
    {
        return self::API;
    }

    public function getParams(): array
    {
        return [];
    }
}