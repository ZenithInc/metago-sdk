<?php

declare(strict_types=1);

namespace Zenith\Metago\Requests\Payment;

use Zenith\Metago\RequestInterface;

/**
 * 平安-修改银行卡
 *
 * @see https://s.apifox.cn/ae1a1bd8-d779-4338-8d71-09412a62cf36/api-134483019
 */
class PostCardUpdateRequest implements RequestInterface
{

    const API = '/payment/v1/card/update';

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
        return [
            'alias' => $this->alias,
        ];
    }

    public function setAlias(string $alias): PostCardUpdateRequest
    {
        $this->alias = $alias;

        return $this;
    }
}
