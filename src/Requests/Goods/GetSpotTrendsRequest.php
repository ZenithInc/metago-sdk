<?php

namespace Zenith\Metago\Requests\Goods;

use Zenith\Metago\RequestInterface;

/**
 * 分时图全量数据
 */
class GetSpotTrendsRequest implements RequestInterface
{
    const API = '/goods/v1/spot/trends';

    /**
     * 交易对
     * @var string
     */
    private $symbol;

    /**
     * 天数
     * @var int
     */
    private $days;

    public function setSymbol(string $symbol): self
    {
        $this->symbol = $symbol;

        return $this;
    }

    public function setDays(int $days): self
    {
        $this->days = $days;

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
            'days' => $this->days,
        ];
    }
}