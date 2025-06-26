<?php

namespace Zenith\Metago;

interface RequestInterface
{

    public function getApi(): string;

    public function getParams(): array;

}
