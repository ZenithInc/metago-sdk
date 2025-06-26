<?php

namespace Zenith\Metago\Exceptions;

use Exception;

class EnvVariableErrorException extends Exception
{

    protected $code = 100002;

    protected $message = "Environment variables must be prod or dev";
}