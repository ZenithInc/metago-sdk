<?php

namespace Zenith\Metago\Requests\Order;

use Zenith\Metago\RequestInterface;

/**
 * 非交易日
 */
class DepositNoTradeDaysRequest implements RequestInterface
{
    const API = '/order/v1/deposit/no-trade-days';

    public function getApi(): string
    {
        return self::API;
    }

    public function getParams(): array
    {
        return [];
    }
}