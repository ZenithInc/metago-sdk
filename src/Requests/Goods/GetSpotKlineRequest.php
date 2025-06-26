<?php

namespace Zenith\Metago\Requests\Goods;

use Zenith\Metago\RequestInterface;

/**
 * k线图全量数据
 */
class GetSpotKlineRequest implements RequestInterface
{
    const API = '/goods/v1/spot/kline';

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