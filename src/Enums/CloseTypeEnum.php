<?php

namespace Zenith\Metago\Enums;

/**
 * 退订类型
 *
 * @see https://s.apifox.cn/ae1a1bd8-d779-4338-8d71-09412a62cf36/doc-6638369
 */
class CloseTypeEnum
{

    public const OPTIONS = [3, 4, 5, 6, 7];

    /**
     * 限价止损退订
     */
    public const STOP_LOSS_CANCELLATION = 3;

    /**
     * 限价止盈退订
     */
    public const TAKE_PROFIT_CANCELLATION = 4;

    /**
     * 手动亏损退订
     */
    public const MANUAL_LOSS_CANCELLATION = 5;

    /**
     * 手动盈利退订
     */
    public const MANUAL_PROFIT_CANCELLATION = 6;

    /**
     * 到期退订
     */
    public const EXPIRY_CANCELLATION = 7;
}
