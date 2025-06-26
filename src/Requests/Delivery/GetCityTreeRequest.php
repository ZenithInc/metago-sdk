<?php

namespace Zenith\Metago\Requests\Delivery;

use Zenith\Metago\RequestInterface;

/**
 * 城市树
 */
class GetCityTreeRequest implements RequestInterface
{
    const API = '/delivery/v1/city/tree';

    public function getApi(): string
    {
        return self::API;
    }

    public function getParams(): array
    {
        return [];
    }
}