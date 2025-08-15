<?php

namespace Zenith\Metago\Enums;

/**
 * 账单类型
 *
 * @see https://s.apifox.cn/ae1a1bd8-d779-4338-8d71-09412a62cf36/doc-6478070
 */
class TradeTypeEnum
{
    public const OPTIONS = ['recharge', 'consume', 'withdraw', 'refund', 'fill_difference', 'recharge_small'];

    /**
     * 充值
     */
    public const RECHARGE = 'recharge';

    /**
     * 消费
     */
    public const CONSUME = 'consume';

    /**
     * 提现
     */
    public const WITHDRAW = 'withdraw';

    /**
     * 退款
     */
    public const REFUND = 'refund';

    /**
     * 补差价
     */
    public const FILL_DIFFERENCE = 'fill_difference';

    /**
     * 小额充值
     */
    public const RECHARGE_SMALL = 'recharge_small';
}
