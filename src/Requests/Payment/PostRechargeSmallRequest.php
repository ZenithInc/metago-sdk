<?php

namespace Zenith\Metago\Requests\Payment;

use Zenith\Metago\RequestInterface;

/**
 * 小额充值
 *
 * @see https://apifox.com/apidoc/shared/ae1a1bd8-d779-4338-8d71-09412a62cf36/api-247345860
 */
class PostRechargeSmallRequest implements RequestInterface
{

    const API = '/payment/v1/recharge/small';

    /**
     * 充值金额
     * @var int
     */
    private $amount;

    /**
     * 支付方式(ali_way: 支付宝h5, ali_native: 支付宝扫码，wx_applet: 微信小程序，wx_native: 微信扫码, wx_jsapi: 微信公众号支付，bak: 快捷支付，cash：余额支付)
     * @var string
     */
    private $payType;

    /**
     * 支付渠道
     * @var string
     */
    private $payChannel;

    /**
     * 银行卡别名
     * @var string
     */
    private $bankAlias = '';

    /**
     * 支付回跳地址
     * @var string
     */
    private $returnUrl = '';

    public function getApi(): string
    {
        return self::API;
    }

    public function setAmount(int $amount): PostRechargeSmallRequest
    {
        $this->amount = $amount;
        return $this;
    }

    public function setPayType(string $payType): PostRechargeSmallRequest
    {
        $this->payType = $payType;
        return $this;
    }

    public function setPayChannel(string $payChannel): PostRechargeSmallRequest
    {
        $this->payChannel = $payChannel;
        return $this;
    }

    public function setBankAlias(string $bankAlias): PostRechargeSmallRequest
    {
        $this->bankAlias = $bankAlias;
        return $this;
    }

    public function setReturnUrl(string $returnUrl): PostRechargeSmallRequest
    {
        $this->returnUrl = $returnUrl;
        return $this;
    }

    public function getParams(): array
    {
        return [
            'amount' => $this->amount,
            'pay_type' => $this->payType,
            'pay_channel' => $this->payChannel,
            'bank_alias' => $this->bankAlias,
            'return_url' => $this->returnUrl,
        ];
    }
}