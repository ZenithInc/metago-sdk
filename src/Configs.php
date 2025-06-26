<?php

namespace Zenith\Metago;

use Zenith\Metago\Exceptions\EndpointEnvEmptyException;
use Zenith\Metago\Exceptions\EnvVariableErrorException;

class Configs
{

    const PROD_ENDPOINT = 'https://open.api.artchainearth.com';

    const DEV_ENDPOINT = 'https://dev.api.artchainearth.com';

    /**
     * 商户ID
     * @var int
     */
    private $merchantId;

    /**
     * 密钥
     * @var string
     */
    private $secretKey;

    /**
     * 应用: 固定值
     * @var string
     */
    private $application = 'wr3ue';

    /**
     * 请求端点
     * @var string
     */
    private $endpoint;

    /**
     * 请求环境(prod/dev)
     * @var string
     */
    private $env;

    /**
     * @throws EndpointEnvEmptyException
     * @throws EnvVariableErrorException
     */
    public function __construct(int $merchantId, string $secretKey, string $env = '', string $endpoint = '')
    {
        $this->merchantId = $merchantId;
        $this->secretKey = $secretKey;
        if (empty($endpoint) && empty($env)) {
            throw new EndpointEnvEmptyException();
        }
        if (empty($endpoint)) {
            $env = strtolower($env);
            if ($env !== 'prod' && $env != 'dev') {
                throw new EnvVariableErrorException();
            }
            $this->endpoint = $env === 'prod' ? self::PROD_ENDPOINT : self::DEV_ENDPOINT;
        } else {
            $this->endpoint = $endpoint;
        }
        $this->env = $env;
    }

    public function getMerchantId(): int
    {
        return $this->merchantId;
    }

    public function getSecretKey(): string
    {
        return $this->secretKey;
    }

    public function getApplication(): string
    {
        return $this->application;
    }

    public function getEndpoint(): string
    {
        return $this->endpoint;
    }

    public function getEnv(): string
    {
        return $this->env;
    }
}