<?php

declare(strict_types=1);

namespace Zenith\Metago\Requests\Ump;

use Zenith\Metago\RequestInterface;

/**
 * 获取店铺优惠券列表
 *
 * @see https://s.apifox.cn/ae1a1bd8-d779-4338-8d71-09412a62cf36/api-312917692
 */
class GetCouponShopListRequest implements RequestInterface
{

    const API = '/ump/v1/coupon/shop-list';

    /**
     * 商户号
     *
     * @var int
     */
    private $merchantId;

    /**
     * 分页数
     *
     * @var int
     */
    private $page = 1;

    /**
     * 分页大小
     *
     * @var int
     */
    private $pageSize = 20;

    public function getApi(): string
    {
        return self::API;
    }

    public function getParams(): array
    {
        return [
            'merchant_id' => $this->merchantId,
            'page' => $this->page,
            'page_size' => $this->pageSize,
        ];
    }

    public function setPageSize(int $pageSize): GetCouponShopListRequest
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    public function setPage(int $page): GetCouponShopListRequest
    {
        $this->page = $page;
        return $this;
    }

    public function setMerchantId(int $merchantId): GetCouponShopListRequest
    {
        $this->merchantId = $merchantId;
        return $this;
    }
}