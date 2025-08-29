<?php

declare(strict_types=1);

namespace Zenith\Metago\Requests\Goods;

use Zenith\Metago\RequestInterface;

/**
 * 获取商品详情
 *
 * @see https://s.apifox.cn/ae1a1bd8-d779-4338-8d71-09412a62cf36/api-237905503
 */
class GetDepositDetailRequest implements RequestInterface
{

    const API = '/goods/v1/deposit/detail';

    /**
     * 商品编号
     * @var string
     */
    private $alias;

    public function getApi(): string
    {
        return self::API;
    }

    public function getParams(): array
    {
        return ['alias' => $this->alias];
    }

    public function setAlias(string $alias): GetDepositDetailRequest
    {
        $this->alias = $alias;
        return $this;
    }
}
