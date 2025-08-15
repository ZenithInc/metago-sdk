<?php

namespace Zenith\Metago\Enums;

/**
 * 支付方式
 *
 * @see https://s.apifox.cn/ae1a1bd8-d779-4338-8d71-09412a62cf36/doc-6478038
 */
class PayTypeEnum
{

    public const OPTIONS = ['ali_wap', 'ali_native', 'wx_applet', 'wx_native', 'wx_jsapi', 'bank', 'cash'];

    /**
     * 支付宝 H5
     */
    public const ALI_WAP = 'ali_wap';

    /**
     * 支付宝扫码
     */
    public const ALI_NATIVE = 'ali_native';

    /**
     * 微信小程序
     */
    public const WX_APPLET = 'wx_applet';

    /**
     * 微信扫码
     */
    public const WX_NATIVE = 'wx_native';

    /**
     * 微信公众号支付
     */
    public const WX_JSAPI = 'wx_jsapi';

    /**
     * 快捷支付
     */
    public const BANK = 'bank';

    /**
     * 余额支付
     */
    public const CASH = 'cash';
}
