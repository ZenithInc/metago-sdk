<?php

namespace Zenith\Metago\Requests\Order;

use Zenith\Metago\Exceptions\InvalidArgumentException;
use Zenith\Metago\RequestInterface;

/**
 * 获取订单详情
 *
 * @see https://s.apifox.cn/ae1a1bd8-d779-4338-8d71-09412a62cf36/api-92633296
 */
class GetOrderDetailRequest implements RequestInterface
{

    const API = '/order/v1/query/detail';

    /**
     * 订单号
     *
     * @var string
     */
    private $orderSn;

    public function getApi(): string
    {
        return self::API;
    }

    public function getParams(): array
    {
        if (!$this->orderSn) {
            throw new InvalidArgumentException('Order sn is required');
        }
        return ['order_sn' => $this->orderSn];
    }

    public function setOrderSn(string $orderSn): GetOrderDetailRequest
    {
        $this->orderSn = $orderSn;
        return $this;
    }
}