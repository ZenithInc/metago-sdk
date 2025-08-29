<?php

declare(strict_types=1);

namespace Zenith\Metago\Requests\Ump;

use Zenith\Metago\Exceptions\InvalidArgumentException;
use Zenith\Metago\RequestInterface;

/**
 * 优惠券发放
 *
 * @see https://s.apifox.cn/ae1a1bd8-d779-4338-8d71-09412a62cf36/api-307101702
 */
class PostCouponSendRequest implements RequestInterface
{

    const API = '/ump/v1/coupon/send';

    /**
     * 商户号
     *
     * @var string
     */
    private $memberId;

    /**
     * 优惠券编号
     *
     * @var string
     */
    private $couponAlias;

    /**
     * 手机号列表
     *
     * @var array
     */
    private $mobiles = [];

    /**
     * 用户名列表
     *
     * @var array
     */
    private $usernames = [];

    public function getApi(): string
    {
        return self::API;
    }

    public function getParams(): array
    {
        $params = [
            'member_id' => $this->memberId,
            'coupon_alias' => $this->couponAlias,
        ];
        if (!empty($this->usernames)) {
            $params['usernames'] = implode(',', $this->usernames);
        }
        if (!empty($this->mobiles)) {
            $params['mobiles'] = implode(',', $this->mobiles);
        }

        return $params;
    }

    /**
     * @param  string $memberId
     * @return PostCouponSendRequest
     */
    public function setMemberId(string $memberId): PostCouponSendRequest
    {
        $this->memberId = $memberId;
        return $this;
    }

    /**
     * @param  string $couponAlias
     * @return PostCouponSendRequest
     */
    public function setCouponAlias(string $couponAlias): PostCouponSendRequest
    {
        $this->couponAlias = $couponAlias;
        return $this;
    }

    /**
     * 添加手机号
     *
     * @param  array  $mobiles
     * @return PostCouponSendRequest
     * @throws InvalidArgumentException
     */
    public function addMobiles(array $mobiles): PostCouponSendRequest
    {
        if (!empty($this->usernames)) {
            throw new InvalidArgumentException('Cannot set both mobiles and usernames.');
        }
        $this->mobiles = array_merge($this->mobiles, $mobiles);
        return $this;
    }

    /**
     * 添加用户名
     *
     * @param  array  $usernames
     * @return $this
     * @throws InvalidArgumentException
     */
    public function addUsernames(array $usernames): PostCouponSendRequest
    {
        if (!empty($this->mobiles)) {
            throw new InvalidArgumentException('Cannot set both mobiles and usernames.');
        }
        $this->usernames = array_merge($this->usernames, $usernames);
        return $this;
    }
}
