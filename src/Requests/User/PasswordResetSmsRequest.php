<?php

namespace Zenith\Metago\Requests\User;

use Zenith\Metago\RequestInterface;

/**
 * 重置密码验证码
 */
class PasswordResetSmsRequest implements RequestInterface
{
    const API = '/user/v1/password/reset-sms';

    /**
     * 手机号
     * @var string
     */
    private $mobile;

    public function setMobile(string $mobile): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function getApi(): string
    {
        return self::API;
    }

    public function getParams(): array
    {
        return [
            'mobile' => $this->mobile,
        ];
    }
}