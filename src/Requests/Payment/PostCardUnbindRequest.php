<?php

namespace Zenith\Metago\Requests\Payment;

use Zenith\Metago\RequestInterface;

/**
 * 快捷支付-解绑银行卡
 *
 * @see https://apifox.com/apidoc/shared/ae1a1bd8-d779-4338-8d71-09412a62cf36/api-134483018
 */
class PostCardUnbindRequest implements RequestInterface
{

    const API = '/payment/v1/card/unbind';

    /**
     * 银行卡别名
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

    public function setAlias(string $alias): PostCardUnbindRequest
    {
        $this->alias = $alias;
        return $this;
    }
}