<?php

namespace Zenith\Metago\Requests\User;

use Zenith\Metago\RequestInterface;

/**
 * 登录by手机号密码
 */
class LoginByMobilePasswordRequest implements RequestInterface
{
    const API = '/user/v1/login/by-mobile-password';

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
     * 邀请码
     * @var string
     */
    private $inviteCode = '';

    /**
     * 店铺id
     * @var int
     */
    private $shopId = 0;

    /**
     * 商户id
     * @var int
     */
    private $merchantId = 0;

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

    public function setShopId(int $shopId): self
    {
        $this->shopId = $shopId;

        return $this;
    }

    public function setMerchantId(int $merchantId): self
    {
        $this->merchantId = $merchantId;

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
            'password' => $this->password,
            'invite_code' => $this->inviteCode,
            'shop_id' => $this->shopId,
            'merchant_id' => $this->merchantId
        ];
    }
}