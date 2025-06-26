<?php

namespace Zenith\Metago\Requests\User;

use Zenith\Metago\RequestInterface;

/**
 * 重置密码
 */
class PasswordResetRequest implements RequestInterface
{
    const API = '/user/v1/password/reset';

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
     * 身份证号
     * @var string|null
     */
    private $idCardNo;

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

    public function setSms(string $sms): self
    {
        $this->sms = $sms;

        return $this;
    }

    public function setIdCardNo(string $idCardNo): self
    {
        $this->idCardNo = $idCardNo;

        return $this;
    }

    public function getApi(): string
    {
        return self::API;
    }

    public function getParams(): array
    {
        $params = [
            'mobile' => $this->mobile,
            'password' => $this->password,
            'sms' => $this->sms,
        ];

        if (!empty($this->idCardNo)) {
            $params['id_card_no'] = $this->idCardNo;
        }

        return $params;
    }
}