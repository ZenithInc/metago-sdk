<?php

namespace Zenith\Metago\Enums;

/**
 * 订单状态
 *
 * @see https://s.apifox.cn/ae1a1bd8-d779-4338-8d71-09412a62cf36/doc-6601062
 */
class OrderStatusEnum
{

    public const OPTIONS = ['WAIT_REST_PAY', 'CLOSING', 'CLOSED', 'WAIT_SEND', 'WAIT_CONFIRM_WEIGHT', 'WAIT_PAY_DIFFERENCE', 'WAIT_PURCHASE', 'WAIT_CONFIRM', 'SUCCESS'];

    /**
     * 待付尾款
     */
    public const WAIT_REST_PAY = 'WAIT_REST_PAY';

    /**
     * 退订中
     */
    public const CLOSING = 'CLOSING';

    /**
     * 已退订
     */
    public const CLOSED = 'CLOSED';

    /**
     * 待发货
     */
    public const WAIT_SEND = 'WAIT_SEND';

    /**
     * 待确认重量
     */
    public const WAIT_CONFIRM_WEIGHT = 'WAIT_CONFIRM_WEIGHT';

    /**
     * 待支付差价
     */
    public const WAIT_PAY_DIFFERENCE = 'WAIT_PAY_DIFFERENCE';

    /**
     * 待发货
     */
    public const WAIT_PURCHASE = 'WAIT_PURCHASE';

    /**
     * 待收货
     */
    public const WAIT_CONFIRM = 'WAIT_CONFIRM';

    /**
     * 已完成
     */
    public const SUCCESS = 'SUCCESS';
}
