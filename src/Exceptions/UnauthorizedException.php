<?php

declare(strict_types=1);

namespace Zenith\Metago\Exceptions;

use Exception;

class UnauthorizedException extends Exception
{

    protected $code = 100003;

    protected $message = "Unauthorized, token is invalid";
}
