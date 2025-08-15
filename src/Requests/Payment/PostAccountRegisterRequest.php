<?php

namespace Zenith\Metago\Requests\Payment;

use Zenith\Metago\Exceptions\InvalidArgumentException;
use Zenith\Metago\RequestInterface;

/**
 * 账户开户
 *
 * @see https://s.apifox.cn/ae1a1bd8-d779-4338-8d71-09412a62cf36/api-134483010
 */
class PostAccountRegisterRequest implements RequestInterface
{

    const API = '/payment/v1/account/register-url';

    /**
     * 设备类型: h5/pc
     * @var string
     */
    private $device;

    public function getApi(): string
    {
        return self::API;
    }

    public function getParams(): array
    {
        return [];
    }

    /**
     * @throws InvalidArgumentException
     */
    public function setDevice(string $device): PostAccountRegisterRequest
    {
        if ($device !== 'h5' && $device !== 'pc') {
            throw new InvalidArgumentException('Invalid device type, must be "h5" or "pc"');
        }
        $this->device = $device;

        return $this;
    }
}