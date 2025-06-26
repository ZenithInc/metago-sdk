<?php

namespace Zenith\Metago\Requests\User;

use Zenith\Metago\RequestInterface;

/**
 * 用户信息-可验证token
 */
class GetUserInfoRequest implements RequestInterface
{
    const API = '/user/v1/account/info';

    public function getApi(): string
    {
        return self::API;
    }

    public function getParams(): array
    {
        return [];
    }
}