<?php

namespace Zenith\Metago\Enums;

/**
 * 订单类型
 *
 * @see https://s.apifox.cn/ae1a1bd8-d779-4338-8d71-09412a62cf36/doc-6478169
 */
class OrderTypeEnum
{

    public const OPTIONS = ['presale', 'spot', 'purchase'];

    /**
     * 订购
     */
    public const PRESALE = 'presale';

    /**
     * 交货
     */
    public const SPOT = 'spot';

    /**
     * 采购
     */
    public const PURCHASE = 'purchase';
}
