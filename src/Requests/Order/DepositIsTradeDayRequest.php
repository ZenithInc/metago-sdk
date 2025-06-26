<?php

namespace Zenith\Metago\Requests\Order;

use Zenith\Metago\RequestInterface;

/**
 * 是否交易日
 */
class DepositIsTradeDayRequest implements RequestInterface
{
    const API = '/order/v1/deposit/is-trade-day';

    /**
     * 品种
     * @var string
     */
    private $symbol;

    /**
     * 日期 如：2025-01-01
     * @var string
     */
    private $day;

    public function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;

        return $this;
    }

    public function setDay(string $day): self
    {
        $this->day = $day;

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
            'day' => $this->day,
        ];
    }
}