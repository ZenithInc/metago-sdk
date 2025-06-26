<?php

declare(strict_types=1);

namespace Zenith\Metago\Exceptions;

use Exception;

class InvalidArgumentException extends Exception
{
    protected $code = 100004;

    protected $message = "Invalid argument";
}
