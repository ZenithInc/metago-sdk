<?php

namespace Zenith\Metago\Requests\User;

use Zenith\Metago\Exceptions\InvalidArgumentException;
use Zenith\Metago\RequestInterface;

/**
 * 实名认证
 */
class CertVerifyRequest implements RequestInterface
{
    const API = '/user/v1/cert/verify';

    /**
     * 账户类型1.企业2.个体工商户3.个人
     * @var int
     */
    private $accountType;

    /**
     * 账户名称
     * @var string
     */
    private $accountName;

    /**
     * 证件类型1.身份证2.护照3.港澳台居民通行证4.台胞证
     * @var int
     */
    private $cardType = 1;

    /**
     * 身份证姓名
     * @var string
     */
    private $idCardName;

    /**
     * 身份证号
     * @var string
     */
    private $idCardNo;

    /**
     * 身份证正面
     * @var string|null
     */
    private $idCardPositive;

    /**
     * 身份证反面
     * @var string|null
     */
    private $idCardNegative;

    /**
     * 营业执照
     * @var string|null
     */
    private $license;

    /**
     * 社会信用代码
     * @var string|null
     */
    private $licenseNo;

    /**
     * 国籍
     * @var string|null
     */
    private $cardNationality;

    /**
     * 证件有效期
     * @var int|null
     */
    private $cardDeadline;

    /**
     * @throws InvalidArgumentException
     */
    public function setAccountType(int $accountType): self
    {
        if ($accountType < 1 || $accountType > 3) {
            throw new InvalidArgumentException('accountType must be 1, 2 or 3');
        }
        $this->accountType = $accountType;

        return $this;
    }

    public function setAccountName(string $accountName): self
    {
        $this->accountName = $accountName;

        return $this;
    }

    /**
     * @throws InvalidArgumentException
     */
    public function setCardType(int $cardType): self
    {
        if ($cardType < 1 || $cardType > 4) {
            throw new InvalidArgumentException('cardType must be 1, 2, 3 or 4');
        }
        $this->cardType = $cardType;

        return $this;
    }

    public function setIdCardName(string $idCardName): self
    {
        $this->idCardName = $idCardName;

        return $this;
    }

    public function setIdCardNo(string $idCardNo): self
    {
        $this->idCardNo = $idCardNo;

        return $this;
    }

    public function setIdCardPositive(string $idCardPositive): self
    {
        $this->idCardPositive = $idCardPositive;

        return $this;
    }

    public function setIdCardNegative(string $idCardNegative): self
    {
        $this->idCardNegative = $idCardNegative;

        return $this;
    }

    public function setLicense(string $license): self
    {
        $this->license = $license;

        return $this;
    }

    public function setLicenseNo(string $licenseNo): self
    {
        $this->licenseNo = $licenseNo;

        return $this;
    }

    public function setCardNationality(string $cardNationality): self
    {
        $this->cardNationality = $cardNationality;

        return $this;
    }

    public function setCardDeadline(int $cardDeadline): self
    {
        $this->cardDeadline = $cardDeadline;

        return $this;
    }

    public function getApi(): string
    {
        return self::API;
    }

    public function getParams(): array
    {
        $params = [
            'account_type' => $this->accountType,
            'account_name' => $this->accountName,
            'card_type' => $this->cardType,
            'id_card_name' => $this->idCardName,
            'id_card_no' => $this->idCardNo,
        ];

        if (!empty($this->idCardPositive)) {
            $params['id_card_positive'] = $this->idCardPositive;
        }

        if (!empty($this->idCardNegative)) {
            $params['id_card_negative'] = $this->idCardNegative;
        }

        if (!empty($this->license)) {
            $params['license'] = $this->license;
        }

        if (!empty($this->licenseNo)) {
            $params['license_no'] = $this->licenseNo;
        }

        if (!empty($this->cardNationality)) {
            $params['card_nationality'] = $this->cardNationality;
        }

        if (!empty($this->cardDeadline)) {
            $params['card_deadline'] = $this->cardDeadline;
        }

        return $params;
    }
}