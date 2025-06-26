<?php

namespace Zenith\Metago\Requests\User;

use Zenith\Metago\Exceptions\InvalidArgumentException;
use Zenith\Metago\RequestInterface;

/**
 * 地址保存
 */
class SaveAddressRequest implements RequestInterface
{
    const API = '/user/v1/address/save';

    /**
     * 地址ID
     * @var string|null
     */
    private $alias;

    /**
     * 区县code
     * @var int
     */
    private $districtCode;

    /**
     * 详细地址
     * @var string
     */
    private $detailAddress;

    /**
     * 门牌号
     * @var string|null
     */
    private $doorplate;

    /**
     * 收货人
     * @var string
     */
    private $consignee;

    /**
     * 收货人电话
     * @var string
     */
    private $mobile;

    /**
     * 经度
     * @var float|null
     */
    private $lng;

    /**
     * 纬度
     * @var float|null
     */
    private $lat;

    /**
     * 性别
     * @var int|null
     */
    private $sex;

    /**
     * 标签
     * @var int|null
     */
    private $tag;

    /**
     * 是否默认1是2否
     * @var int|null
     */
    private $isDefault;

    public function setAlias(string $alias): self
    {
        $this->alias = $alias;

        return $this;
    }

    public function setDistrictCode(int $districtCode): self
    {
        $this->districtCode = $districtCode;

        return $this;
    }

    public function setDetailAddress(string $detailAddress): self
    {
        $this->detailAddress = $detailAddress;

        return $this;
    }

    public function setDoorplate(string $doorplate): self
    {
        $this->doorplate = $doorplate;

        return $this;
    }

    public function setConsignee(string $consignee): self
    {
        $this->consignee = $consignee;

        return $this;
    }

    public function setMobile(string $mobile): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function setLng(float $lng): self
    {
        $this->lng = $lng;

        return $this;
    }

    public function setLat(float $lat): self
    {
        $this->lat = $lat;

        return $this;
    }

    public function setSex(int $sex): self
    {
        $this->sex = $sex;

        return $this;
    }

    public function setTag(int $tag): self
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * @throws InvalidArgumentException
     */
    public function setIsDefault(int $isDefault): self
    {
        if ($isDefault !== 1 && $isDefault !== 2) {
            throw new InvalidArgumentException('isDefault must be 1 or 2');
        }
        $this->isDefault = $isDefault;

        return $this;
    }

    public function getApi(): string
    {
        return self::API;
    }

    public function getParams(): array
    {
        $params = [
            'district_code' => $this->districtCode,
            'detail_address' => $this->detailAddress,
            'consignee' => $this->consignee,
            'mobile' => $this->mobile,
        ];

        if (!empty($this->alias)) {
            $params['alias'] = $this->alias;
        }

        if (!empty($this->doorplate)) {
            $params['doorplate'] = $this->doorplate;
        }

        if (!empty($this->lng)) {
            $params['lng'] = $this->lng;
        }

        if (!empty($this->lat)) {
            $params['lat'] = $this->lat;
        }

        if (!empty($this->sex)) {
            $params['sex'] = $this->sex;
        }

        if (!empty($this->tag)) {
            $params['tag'] = $this->tag;
        }

        if (!empty($this->isDefault)) {
            $params['is_default'] = $this->isDefault;
        }

        return $params;
    }
}