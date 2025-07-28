<?php

namespace Zenith\Metago\Requests\Payment;

use Zenith\Metago\RequestInterface;

class GetCardListRequest implements RequestInterface
{

    const API = '/payment/v1/card/list';

    /**
     * 用途：1-全部；2-充值；3-提现；
     * @var int
     */
    private $purpose;

    public function getApi(): string
    {
        return self::API;
    }

    public function getParams(): array
    {
        return [
            'purpose' => $this->purpose,
        ];
    }

    public function setPurpose(int $purpose): GetCardListRequest
    {
        $this->purpose = $purpose;
        return $this;
    }
}
