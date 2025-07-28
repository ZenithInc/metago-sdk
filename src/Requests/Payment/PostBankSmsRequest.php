<?php

namespace Zenith\Metago\Requests\Payment;

use Zenith\Metago\RequestInterface;

class PostBankSmsRequest implements RequestInterface
{

    const API = '/payment/v1/bank/sms';

    private $orderSn;

    private $bankAlias;

    public function getApi(): string
    {
        return self::API;
    }

    public function getParams(): array
    {
        return [
            'order_sn' => $this->orderSn,
            'bank_alias' => $this->bankAlias,
        ];
    }

    /**
     * @param  mixed  $orderSn
     * @return PostBankSmsRequest
     */
    public function setOrderSn($orderSn)
    {
        $this->orderSn = $orderSn;
        return $this;
    }

    /**
     * @param  mixed  $bankAlias
     * @return PostBankSmsRequest
     */
    public function setBankAlias($bankAlias)
    {
        $this->bankAlias = $bankAlias;
        return $this;
    }
}
