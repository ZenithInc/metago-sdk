<?php

namespace Zenith\Metago\Requests\Goods;

use Zenith\Metago\RequestInterface;

/**
 * 实时数据
 */
class GetSpotRealTimeRequest implements RequestInterface
{
    const API = '/goods/v1/spot/real-time';

    /**
     * 交易对
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