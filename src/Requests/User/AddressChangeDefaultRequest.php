<?php

namespace Zenith\Metago\Requests\User;

use Zenith\Metago\RequestInterface;

/**
 * 将收货地址设置为默认
 */
class AddressChangeDefaultRequest implements RequestInterface
{
    const API = '/user/v1/address/change-default';

    /**
     * 地址ID
     * @var string
     */
    private $alias;

    public function setAlias(string $alias): self
    {
        $this->alias = $alias;

        return $this;
    }

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
}