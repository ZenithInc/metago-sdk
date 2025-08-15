<?php

namespace Zenith\Metago\Requests\Order;

use Zenith\Metago\Exceptions\InvalidArgumentException;
use Zenith\Metago\RequestInterface;

/**
 * 创建订单
 *
 * @see https://s.apifox.cn/ae1a1bd8-d779-4338-8d71-09412a62cf36/api-235728550
 */
class OrderDepositCreateRequest implements RequestInterface
{

    const API = '/order/v1/deposit/create';


    /**
     * 商品别名
     *
     * @var string
     */
    private $productAlias;

    /**
     * 商品数量
     *
     * @var int
     */
    private $num;

    /**
     * 单个每克定金
     *
     * @var int
     */
    private $price;

    /**
     * 下单方向: settle_price-结算价预定；now_price-现价预定;
     *
     * @var string
     */
    private $direction;

    /**
     * 下跌金额
     *
     * @var int
     */
    private $fallPrice;

    /**
     * 上涨金额
     *
     * @var int
     */
    private $risePrice;

    /**
     * 优惠卷ID
     *
     * @var string
     */
    private $couponId = '';

    /**
     * 是否使用优惠券
     *
     * @var bool
     */
    private $useCoupon = true;

    public function setProductAlias(string $productAlias): OrderDepositCreateRequest
    {
        $this->productAlias = $productAlias;
        return $this;
    }

    public function setNum(int $num): OrderDepositCreateRequest
    {
        $this->num = $num;
        return $this;
    }

    public function setPrice(int $price): OrderDepositCreateRequest
    {
        $this->price = $price;
        return $this;
    }

    public function setDirection(string $direction): OrderDepositCreateRequest
    {
        if ($direction !== 'settle_price' && $direction !== 'now_price') {
            throw new InvalidArgumentException("Invalid direction, must be 'settle_price' or 'now_price'");
        }
        $this->direction = $direction;
        return $this;
    }

    public function setFallPrice(int $fallPrice): OrderDepositCreateRequest
    {
        $this->fallPrice = $fallPrice;
        return $this;
    }

    public function setRisePrice(int $risePrice): OrderDepositCreateRequest
    {
        $this->risePrice = $risePrice;
        return $this;
    }

    public function setCouponId(string $couponId): OrderDepositCreateRequest
    {
        $this->couponId = $couponId;
        return $this;
    }

    public function setUseCoupon(bool $useCoupon): OrderDepositCreateRequest
    {
        $this->useCoupon = $useCoupon;
        return $this;
    }

    public function getApi(): string
    {
        return self::API;
    }

    public function getParams(): array
    {
        $params = [
            'product_alias' => $this->productAlias,
            'num' => $this->num,
            'price' => $this->price,
            'direction' => $this->direction,
            'fall_price' => $this->fallPrice,
            'rise_price' => $this->risePrice,
            'use_coupon' => $this->useCoupon,
        ];
        if (!empty($this->couponId)) {
            $params['coupon_id'] = $this->couponId;
        }

        return $params;
    }
}
