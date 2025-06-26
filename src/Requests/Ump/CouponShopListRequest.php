<?php

namespace Zenith\Metago\Requests\Ump;

use Zenith\Metago\RequestInterface;

/**
 * 店铺优惠券列表
 */
class CouponShopListRequest implements RequestInterface
{
    const API = '/ump/v1/coupon/shop-list';

    /**
     * 商户ID
     * @var int
     */
    private $merchantId;

    /**
     * 页码
     * @var int
     */
    private $page = 1;

    /**
     * 每页数量
     * @var int
     */
    private $pageSize = 20;

    public function setMerchantId(int $merchantId): self
    {
        $this->merchantId = $merchantId;

        return $this;
    }

    public function setPage(int $page): self
    {
        $this->page = $page;

        return $this;
    }

    public function setPageSize(int $pageSize): self
    {
        $this->pageSize = $pageSize;

        return $this;
    }

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
}