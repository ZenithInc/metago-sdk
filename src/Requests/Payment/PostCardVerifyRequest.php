<?php

namespace Zenith\Metago\Requests\Payment;

use Zenith\Metago\RequestInterface;

/**
 * 快捷支付-银行卡验证
 *
 * @see https://apifox.com/apidoc/shared/ae1a1bd8-d779-4338-8d71-09412a62cf36/api-134483020
 */
class PostCardVerifyRequest implements RequestInterface
{

    const API = '/payment/v1/card/verify';

    /**
     * 银行卡别名
     * @var string
     */
    private $alias;

    /**
     * 验证码
     * @var string
     */
    private $messageCode;

    /**
     * 鉴权金额
     * @var float
     */
    private $authAmount;

    public function getApi(): string
    {
        return self::API;
    }

    public function getParams(): array
    {
        $params = [
            'alias' => $this->alias,
        ];
        if (! empty($this->messageCode)) {
            // xxx: 注意，接口 message 写成了 mesage，这里只能将错就错
            $params['mesage_code'] = $this->messageCode;
        }
        if (! is_null($this->authAmount)) {
            $params['auth_amount'] = $this->authAmount;
        }
        return $params;
    }

    public function setMessageCode(string $messageCode): PostCardVerifyRequest
    {
        $this->messageCode = $messageCode;
        return $this;
    }

    public function setAlias(string $alias): PostCardVerifyRequest
    {
        $this->alias = $alias;
        return $this;
    }

    public function setAuthAmount(float $authAmount): PostCardVerifyRequest
    {
        $this->authAmount = $authAmount;
        return $this;
    }
}