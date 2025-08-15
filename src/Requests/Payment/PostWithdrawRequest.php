<?php

namespace Zenith\Metago\Requests\Payment;

use Zenith\Metago\RequestInterface;

/**
 * 余额提现
 *
 * @see https://s.apifox.cn/ae1a1bd8-d779-4338-8d71-09412a62cf36/api-134483023
 */
class PostWithdrawRequest implements RequestInterface
{

    const API = '/payment/v1/cash/withdrawal';

    /**
     * 提现金额
     *
     * @var int
     */
    private $amount;

    /**
     * 银行卡别名
     *
     * @var string
     */
    private $bankAlias;

    /**
     * 商户ID
     * @var string
     */
    private $merchantId = '';

    public function getApi(): string
    {
        return self::API;
    }

    public function getParams(): array
    {
        $params = [
            'amount' => $this->amount,
            'bank_alias' => $this->bankAlias,
        ];
        if (!empty($this->merchantId)) {
            $params['merchant_id'] = $this->merchantId;
        }

        return $params;
    }

    public function setAmount(int $amount): PostWithdrawRequest
    {
        $this->amount = $amount;
        return $this;
    }

    public function setBankAlias(string $bankAlias): PostWithdrawRequest
    {
        $this->bankAlias = $bankAlias;
        return $this;
    }

    public function setMerchantId(string $merchantId): PostWithdrawRequest
    {
        $this->merchantId = $merchantId;
        return $this;
    }

}
