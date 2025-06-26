<?php

namespace Zenith\Metago\Requests\User;

use Zenith\Metago\RequestInterface;

/**
 * 修改昵称
 */
class EditNicknameRequest implements RequestInterface
{
    const API = '/user/v1/account/edit-nickname';

    /**
     * 用户昵称
     * @var string
     */
    private $nickname;

    public function setNickname(string $nickname): self
    {
        $this->nickname = $nickname;

        return $this;
    }

    public function getApi(): string
    {
        return self::API;
    }

    public function getParams(): array
    {
        return [
            'nickname' => $this->nickname,
        ];
    }
}