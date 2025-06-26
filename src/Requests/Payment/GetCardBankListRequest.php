<?php

namespace Zenith\Metago\Requests\Payment;

use Zenith\Metago\RequestInterface;

/**
 * 银行列表
 */
class GetCardBankListRequest implements RequestInterface
{
    const API = '/payment/v1/card/bank-list';

    public function getApi(): string
    {
        return self::API;
    }

    public function getParams(): array
    {
        return [];
    }
}