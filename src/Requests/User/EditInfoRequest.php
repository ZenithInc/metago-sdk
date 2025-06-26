<?php

namespace Zenith\Metago\Requests\User;

use Zenith\Metago\RequestInterface;

/**
 * 修改用户信息
 */
class EditInfoRequest implements RequestInterface
{
    const API = '/user/v1/account/edit-info';

    /**
     * 用户昵称
     * @var string
     */
    private $nickname;

    /**
     * 头像
     * @var string
     */
    private $avatar;

    public function setNickname(string $nickname): self
    {
        $this->nickname = $nickname;

        return $this;
    }

    public function setAvatar(string $avatar): self
    {
        $this->avatar = $avatar;

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
            'avatar' => $this->avatar,
        ];
    }
}