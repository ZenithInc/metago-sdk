<?php

namespace Zenith\Metago\Requests\User;

use Zenith\Metago\RequestInterface;

/**
 * 获取国家列表
 */
class GetCountryListRequest implements RequestInterface
{
    const API = '/user/v1/address/country-list';

    /**
     * 国家名称
     * @var string|null
     */
    private $name;

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getApi(): string
    {
        return self::API;
    }

    public function getParams(): array
    {
        $params = [];
        
        if (!empty($this->name)) {
            $params['name'] = $this->name;
        }
        
        return $params;
    }
}