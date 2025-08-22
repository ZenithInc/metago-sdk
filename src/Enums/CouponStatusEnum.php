<?php

namespace Zenith\Metago\Enums;

class CouponStatusEnum
{

    public const OPTIONS = [1, 2, 3];

    /**
     * 未使用
     */
    public const UNUSED = 1;

    /**
     * 已使用
     */
    public const USED = 2;

    /**
     * 过期
     */
    public const EXPIRED = 3;
}
