<?php

namespace Zenith\Metago\Requests;

use Zenith\Metago\RequestInterface;

/**
 * 发送注册短信
 * @see https://apifox.com/apidoc/shared/ae1a1bd8-d779-4338-8d71-09412a62cf36/api-125575719
 */
class SendRegisterSmsRequest implements RequestInterface
{

    const API = '/user/v1/register/sms';

    /**
     * 手机号
     * @var string
     */
    private $mobile;

    public function getApi(): string
    {
        return self::API;
    }

    public function setMobile(string $mobile): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function getParams(): array
    {
        return [
            'mobile' => $this->mobile,
        ];
    }
}
