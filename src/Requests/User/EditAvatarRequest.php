<?php

namespace Zenith\Metago\Requests\User;

use Zenith\Metago\RequestInterface;

/**
 * 修改头像
 */
class EditAvatarRequest implements RequestInterface
{
    const API = '/user/v1/account/edit-avatar';

    /**
     * 头像
     * @var string
     */
    private $avatar;

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
            'avatar' => $this->avatar,
        ];
    }
}