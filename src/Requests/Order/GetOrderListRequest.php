<?php

namespace Zenith\Metago\Requests\Order;

use Zenith\Metago\Enums\OrderStatusEnum;
use Zenith\Metago\Enums\OrderTypeEnum;
use Zenith\Metago\Exceptions\InvalidArgumentException;
use Zenith\Metago\RequestInterface;

/**
 * 获取订单列表
 *
 * @see https://s.apifox.cn/ae1a1bd8-d779-4338-8d71-09412a62cf36/api-238073553
 */
class GetOrderListRequest implements RequestInterface
{

    const API = '/order/v1/deposit/list';

    /**
     * 分页
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

    /**
     * 商品名称
     * @var string|null
     */
    private $productName = null;

    /**
     * 订单号
     *
     * @var string|null
     */
    private $orderSn = null;

    /**
     * 供应商
     *
     * @var string|null
     */
    private $merchantAlias = null;

    /**
     * 订单类型
     *
     * @var string|null
     */
    private $orderType = null;

    /**
     * 订单状态
     *
     * @var string|null
     */
    private $status = null;

    /**
     * 创建时间, 例如 ["2025-05-15", "2025-05-15"]
     *
     * @var array
     */
    private $createdAt = [];

    public function getApi(): string
    {
        return self::API;
    }

    public function getParams(): array
    {
        $params = [
            'page' => $this->page,
            'pageSize' => $this->pageSize
        ];
        if (! is_null($this->productName)) {
            $params['product_name'] = $this->productName;
        }
        if (! is_null($this->orderSn)) {
            $params['order_sn'] = $this->orderSn;
        }
        if (! is_null($this->merchantAlias)) {
            $params['merchant_alias'] = $this->merchantAlias;
        }
        if (! is_null($this->orderType)) {
            $params['order_type'] = $this->orderType;
        }
        if (! is_null($this->status)) {
            $params['status'] = $this->status;
        }
        if (! empty($this->createdAt)) {
            $params['created_at'] = $this->createdAt;
        }

        return $params;
    }

    public function setPage(int $page): GetOrderListRequest
    {
        $this->page = $page;
        return $this;
    }

    public function setPageSize(int $pageSize): GetOrderListRequest
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    public function setProductName(string $productName): GetOrderListRequest
    {
        $this->productName = $productName;
        return $this;
    }

    public function setOrderSn(string $orderSn): GetOrderListRequest
    {
        $this->orderSn = $orderSn;
        return $this;
    }

    public function setMerchantAlias(string $merchantAlias): GetOrderListRequest
    {
        $this->merchantAlias = $merchantAlias;
        return $this;
    }

    public function setOrderType(string $orderType): GetOrderListRequest
    {
        if (! in_array($orderType, OrderTypeEnum::OPTIONS)) {
            throw new InvalidArgumentException('Order type is invalid');
        }
        $this->orderType = $orderType;
        return $this;
    }

    public function setStatus(string $status): GetOrderListRequest
    {
        if (! in_array($status, OrderStatusEnum::OPTIONS)) {
            throw new InvalidArgumentException('Order status is invalid');
        }
        $this->status = $status;
        return $this;
    }

    public function setCreatedAt(array $createdAt): GetOrderListRequest
    {
        if (count($createdAt) > 2) {
            throw new InvalidArgumentException('The length of created_at must be less than 2');
        }
        if (count($createdAt) === 0) {
            throw new InvalidArgumentException('The length of created_at must be greater than 0');
        }
        if ($createdAt[0] > $createdAt[1]) {
            throw new InvalidArgumentException('The first element of created_at must be less than the second element');
        }
        if (! is_string($createdAt[0])) {
            throw new InvalidArgumentException('The first element of created_at must be a string');
        }
        if (isset($createdAt[1]) && ! is_string($createdAt[1])) {
            throw new InvalidArgumentException('The second element of created_at must be a string');
        }
        $this->createdAt = $createdAt;
        return $this;
    }

}
