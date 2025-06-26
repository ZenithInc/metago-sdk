<?php

namespace Zenith\Metago\Requests;

use Zenith\Metago\RequestInterface;

/**
 * 使用手机号和密码注册
 */
class RegisterWithPhoneAndPasswordRequest implements RequestInterface
{

    const API = '/user/v1/register/by-mobile-password';

    /**
     * 手机号
     * @var string
     */
    private $mobile;

    /**
     * 密码
     * @var string
     */
    private $password;

    /**
     * 短信验证码
     * @var string
     */
    private $sms;

    /**
     * 验证码
     * @var string
     */
    private $inviteCode = '';

    /**
     * 商户号
     * @var int
     */
    private $merchantId = 0;

    public function getApi(): string
    {
        return self::API;
    }

    public function setMobile(string $mobile): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function setInviteCode(string $inviteCode): self
    {
        $this->inviteCode = $inviteCode;

        return $this;
    }

    public function setSms(string $sms): self
    {
       $this->sms = $sms;

       return $this;
    }

    public function setMerchantId(int $merchantId): self
    {
        $this->merchantId = $merchantId;

        return $this;
    }

    public function getParams(): array
    {
        return [
            'mobile' => $this->mobile,
            'password' => $this->password,
            'sms' => $this->sms,
            'invite_code' => $this->inviteCode,
            'merchant_id' => $this->merchantId
        ];
    }
}
