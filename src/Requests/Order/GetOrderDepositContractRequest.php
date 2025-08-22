<?php

namespace Zenith\Metago\Requests\Order;

use Zenith\Metago\Exceptions\InvalidArgumentException;
use Zenith\Metago\RequestInterface;

/**
 * 获取订单合同
 *
 * @see https://s.apifox.cn/ae1a1bd8-d779-4338-8d71-09412a62cf36/api-264321669
 */
class GetOrderDepositContractRequest implements RequestInterface
{

    const API = '/order/v1/deposit/contract';

    private $orderSn;

    public function getApi(): string
    {
        return self::API;
    }

    public function getParams(): array
    {
        return ['order_sn' => $this->orderSn];
    }

    /**
     * @param  string  $orderSn
     * @return GetOrderDepositContractRequest
     * @throws InvalidArgumentException
     */
    public function setOrderSn(string $orderSn): GetOrderDepositContractRequest
    {
        if (empty($orderSn)) {
            throw new InvalidArgumentException('Order sn is required');
        }
        $this->orderSn = $orderSn;

        return $this;
    }
}
