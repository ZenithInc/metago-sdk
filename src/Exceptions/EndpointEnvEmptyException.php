<?php

namespace Zenith\Metago\Exceptions;

use Exception;

class EndpointEnvEmptyException extends Exception
{

    protected $code = 100001;

    protected $message = "Environment/Endpoint variables is empty";
}