<?php

declare(strict_types=1);

namespace Zenith\Metago\Requests\Ump;

use Zenith\Metago\Enums\CouponStatusEnum;
use Zenith\Metago\Exceptions\InvalidArgumentException;
use Zenith\Metago\RequestInterface;

/**
 * 获取优惠券列表
 *
 * @see https://s.apifox.cn/ae1a1bd8-d779-4338-8d71-09412a62cf36/api-113102989
 */
class GetCouponListRequest implements RequestInterface
{

    const API = '/ump/v1/coupon/list';

    /**
     * 商户ID
     * @var string
     */
    private $merchantId;

    /**
     * 状态(1-未使用;2-已使用;3-已过期)
     * @var int
     */
    private $status;

    public function getApi(): string
    {
        return self::API;
    }

    public function getParams(): array
    {
        return [
            'merchant_id' => $this->merchantId,
            'status' => $this->status,
        ];
    }

    public function setMerchantId(string $merchantId): GetCouponListRequest
    {
        $this->merchantId = $merchantId;
        return $this;
    }

    public function setStatus(int $status): GetCouponListRequest
    {
        if (!in_array($status, CouponStatusEnum::OPTIONS)) {
            throw new InvalidArgumentException("Invalid status, must be one of " . implode(', ', CouponStatusEnum::OPTIONS));
        }
        $this->status = $status;
        return $this;
    }
}
