<?php

namespace Zenith\Metago\Requests\User;

use Zenith\Metago\RequestInterface;

/**
 * 用户实名信息
 */
class GetCertInfoRequest implements RequestInterface
{
    const API = '/user/v1/cert/info';

    public function getApi(): string
    {
        return self::API;
    }

    public function getParams(): array
    {
        return [];
    }
}