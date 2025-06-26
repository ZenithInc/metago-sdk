<?php

namespace Zenith\Metago\Requests\Goods;

use Zenith\Metago\RequestInterface;

/**
 * 商品列表
 */
class GetDepositProductListRequest implements RequestInterface
{
    const API = '/goods/v1/deposit/list';

    /**
     * 商户id
     * @var int|null
     */
    private $merchantId;

    /**
     * 关键词
     * @var string|null
     */
    private $keywords;

    /**
     * 分类
     * @var string|null
     */
    private $category;

    /**
     * 分类id
     * @var int|null
     */
    private $categoryId;

    /**
     * 排序
     * @var string|null
     */
    private $sort;

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

    public function setKeywords(string $keywords): self
    {
        $this->keywords = $keywords;

        return $this;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function setCategoryId(int $categoryId): self
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    public function setSort(string $sort): self
    {
        $this->sort = $sort;

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

        if (!empty($this->merchantId)) {
            $params['merchant_id'] = $this->merchantId;
        }

        if (!empty($this->keywords)) {
            $params['keywords'] = $this->keywords;
        }

        if (!empty($this->category)) {
            $params['category'] = $this->category;
        }

        if (!empty($this->categoryId)) {
            $params['category_id'] = $this->categoryId;
        }

        if (!empty($this->sort)) {
            $params['sort'] = $this->sort;
        }

        return $params;
    }
}