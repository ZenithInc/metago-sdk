<?php

namespace Zenith\Metago\Requests\Payment;

use Zenith\Metago\RequestInterface;

/**
 * 快捷支付
 *
 * @see https://apifox.com/apidoc/shared/ae1a1bd8-d779-4338-8d71-09412a62cf36/api-134483013
 */
class PostBankPayRequest implements RequestInterface
{

    const API = '/payment/v1/bank/pay';

    /**
     * 交易订单号
     * @var string
     */
    private $orderSn;

    /**
     * 支付短信验证码
     * @var string
     */
    private $smsCode = '';

    public function getApi(): string
    {
        return self::API;
    }

    public function getParams(): array
    {
        return [
            'order_sn' => $this->orderSn,
            'sms_code' => $this->smsCode,
        ];
    }

    public function setOrderSn(string $orderSn): PostBankPayRequest
    {
        $this->orderSn = $orderSn;
        return $this;
    }

    public function setSmsCode(string $smsCode): PostBankPayRequest
    {
        $this->smsCode = $smsCode;
        return $this;
    }
}
