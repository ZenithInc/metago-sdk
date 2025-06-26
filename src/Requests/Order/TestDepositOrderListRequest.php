<?php

namespace Zenith\Metago\Requests\Order;

use Zenith\Metago\RequestInterface;

/**
 * 订单列表
 */
class TestDepositOrderListRequest implements RequestInterface
{
    const API = '/order/v1/deposit/list';

    /**
     * 商品名称
     * @var string|null
     */
    private $productName;

    /**
     * 订单编号
     * @var string|null
     */
    private $orderSn;

    /**
     * 供应商 alias
     * @var string|null
     */
    private $merchantAlias;

    /**
     * 订单类型 订购presale.订货spot
     * @var string|null
     */
    private $orderType;

    /**
     * 订单状态WAIT_PAY.待付款WAIT_SUCCESS.待完成
     * @var string|null
     */
    private $status;

    /**
     * 创建时间["2025-05-15", "2025-05-15"]
     * @var array|null
     */
    private $createdAt;

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

    public function setProductName(string $productName): self
    {
        $this->productName = $productName;

        return $this;
    }

    public function setOrderSn(string $orderSn): self
    {
        $this->orderSn = $orderSn;

        return $this;
    }

    public function setMerchantAlias(string $merchantAlias): self
    {
        $this->merchantAlias = $merchantAlias;

        return $this;
    }

    public function setOrderType(string $orderType): self
    {
        $this->orderType = $orderType;

        return $this;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function setCreatedAt(array $createdAt): self
    {
        $this->createdAt = $createdAt;

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
        $params = [
            'page' => $this->page,
            'page_size' => $this->pageSize,
        ];

        if (!empty($this->productName)) {
            $params['product_name'] = $this->productName;
        }

        if (!empty($this->orderSn)) {
            $params['order_sn'] = $this->orderSn;
        }

        if (!empty($this->merchantAlias)) {
            $params['merchant_alias'] = $this->merchantAlias;
        }

        if (!empty($this->orderType)) {
            $params['order_type'] = $this->orderType;
        }

        if (!empty($this->status)) {
            $params['status'] = $this->status;
        }

        if (!empty($this->createdAt)) {
            $params['created_at'] = $this->createdAt;
        }

        return $params;
    }
}