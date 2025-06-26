<?php

namespace Zenith\Metago\Requests;

use Zenith\Metago\RequestInterface;

class SendSmsWithBindMobileRequest implements RequestInterface
{

    const API = '/user/v1/mobile/bind-sms';

    /**
     * 新手机号
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
