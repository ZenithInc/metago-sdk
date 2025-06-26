<?php

namespace Zenith\Metago\Requests\Payment;

use Zenith\Metago\RequestInterface;

/**
 * 账单列表
 */
class GetTradeListRequest implements RequestInterface
{
    const API = '/payment/v1/trade/list';

    /**
     * 开始时间
     * @var int|null
     */
    private $startAt;

    /**
     * 结束时间
     * @var int|null
     */
    private $endAt;

    /**
     * 账单类型
     * @var string|null
     */
    private $tradeType;

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

    public function setStartAt(int $startAt): self
    {
        $this->startAt = $startAt;

        return $this;
    }

    public function setEndAt(int $endAt): self
    {
        $this->endAt = $endAt;

        return $this;
    }

    public function setTradeType(string $tradeType): self
    {
        $this->tradeType = $tradeType;

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

        if (!empty($this->startAt)) {
            $params['start_at'] = $this->startAt;
        }

        if (!empty($this->endAt)) {
            $params['end_at'] = $this->endAt;
        }

        if (!empty($this->tradeType)) {
            $params['trade_type'] = $this->tradeType;
        }

        return $params;
    }
}