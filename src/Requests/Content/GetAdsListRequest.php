<?php

namespace Zenith\Metago\Requests\Content;

use Zenith\Metago\RequestInterface;

/**
 * 广告列表
 */
class GetAdsListRequest implements RequestInterface
{
    const API = '/content/v1/ads/list';

    /**
     * 供应商 alias
     * @var string|null
     */
    private $merchantAlias;

    public function setMerchantAlias(string $merchantAlias): self
    {
        $this->merchantAlias = $merchantAlias;

        return $this;
    }

    public function getApi(): string
    {
        return self::API;
    }

    public function getParams(): array
    {
        $params = [];
        
        if (!empty($this->merchantAlias)) {
            $params['merchant_alias'] = $this->merchantAlias;
        }
        
        return $params;
    }
}