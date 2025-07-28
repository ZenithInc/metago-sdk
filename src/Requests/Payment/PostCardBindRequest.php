<?php

namespace Zenith\Metago\Requests\Payment;

use InvalidArgumentException;
use Zenith\Metago\RequestInterface;

/**
 * 快捷支付-银行卡绑定
 *
 * @see https://apifox.com/apidoc/shared/ae1a1bd8-d779-4338-8d71-09412a62cf36/api-134483016
 */
class PostCardBindRequest implements RequestInterface
{

    const API = '/payment/v1/card/bind';

    /**
     * 银行卡号
     * @var string
     */
    private $bankCardNo;

    /**
     * 手机号
     * @var string
     */
    private $mobile;

    /**
     * 用途(可选项：1-全部；2-充值；3-提现;)
     * @var int
     */
    private $purpose = 3;

    /**
     * 支付渠道(可选)
     * @var string|null
     */
    private $payChannel = null;

    /**
     * 身份证姓名(可选)
     * @var string|null
     */
    private $idCardName = null;

    /**
     * 身份证号(可选)
     * @var string|null
     */
    private $idCardNo = null;

    /**
     * 证件有效期(可选)
     * @var int|null
     */
    private $cardDeadline = null;

    /**
     * 银行统一编码(可选)
     * @var string|null
     */
    private $bankUnionNo = null;

    public function setBankCardNo(string $bankCardNo): PostCardBindRequest
    {
        $this->bankCardNo = $bankCardNo;
        return $this;
    }

    public function setBankUnionNo(string $bankUnionNo): PostCardBindRequest
    {
        $this->bankUnionNo = $bankUnionNo;
        return $this;
    }

    public function setCardDeadline(int $cardDeadline): PostCardBindRequest
    {
        $this->cardDeadline = $cardDeadline;
        return $this;
    }

    public function setIdCardNo(string $idCardNo): PostCardBindRequest
    {
        $this->idCardNo = $idCardNo;
        return $this;
    }

    public function setIdCardName(string $idCardName): PostCardBindRequest
    {
        $this->idCardName = $idCardName;
        return $this;
    }

    public function setPayChannel(string $payChannel): PostCardBindRequest
    {
        $this->payChannel = $payChannel;
        return $this;
    }

    public function setPurpose(int $purpose): PostCardBindRequest
    {
        if (!in_array($purpose, [1, 2, 3])) {
            throw new InvalidArgumentException('purpose must be 1, 2 or 3');
        }
        $this->purpose = $purpose;
        return $this;
    }

    public function setMobile(string $mobile): PostCardBindRequest
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
        $params = [
            'mobile' => $this->mobile,
            'purpose' => $this->purpose,
            'bank_card_no' => $this->bankCardNo,
        ];
        !is_null($this->bankUnionNo) && $params['bank_union_no'] = $this->bankUnionNo;
        !is_null($this->cardDeadline) && $params['card_deadline'] = $this->cardDeadline;
        !is_null($this->idCardNo) && $params['id_card_no'] = $this->idCardNo;
        !is_null($this->idCardName) && $params['id_card_name'] = $this->idCardName;
        !is_null($this->payChannel) && $params['pay_channel'] = $this->payChannel;
        return $params;
    }
}