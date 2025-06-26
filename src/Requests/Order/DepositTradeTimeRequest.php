<?php

namespace Zenith\Metago\Requests\Order;

use Zenith\Metago\RequestInterface;

/**
 * 交易时间
 */
class DepositTradeTimeRequest implements RequestInterface
{
    const API = '/order/v1/deposit/trade-time';

    /**
     * 品种
     * @var string
     */
    private $symbol;

    public function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;

        return $this;
    }

    public function getApi(): string
    {
        return self::API;
    }

    public function getParams(): array
    {
        return [
            'symbol' => $this->symbol,
        ];
    }
}