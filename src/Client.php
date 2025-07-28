<?php

namespace Zenith\Metago;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\GuzzleException;
use Zenith\Metago\Exceptions\UnauthorizedException;

class Client
{

    /**
     * 配置
     * @var Configs
     */
    private $configs;


    public function __construct(Configs $configs)
    {
        $this->configs = $configs;
    }

    /**
     * @throws GuzzleException
     * @throws UnauthorizedException
     */
    public function request(RequestInterface $request, string $accessToken = '', bool $isDebug = false): string
    {
        $params = $request->getParams();
        $params['timestamp'] = time();
        $params['merchant_id'] = $this->configs->getMerchantId();
        $sign = $this->calcSign($params, $this->configs->getSecretKey());
        $params['sign'] = $sign;

        $client = new HttpClient();
        $url = $this->configs->getEndpoint() . $request->getApi();
        try {
            $response = $client->post($url, [
                'headers' => ['Application' => $this->configs->getApplication(), 'Authorization' => $accessToken],
                'json' => $params,
            ]);
            $response = $response->getBody()->getContents();
            if ($this->configs->isDebug() || $isDebug) {
                echo 'Url:' . $url . PHP_EOL;
                echo 'Application:' . $this->configs->getApplication() . PHP_EOL;
                echo 'Authorization:' . $accessToken . PHP_EOL;
                echo 'Body:' . json_encode($params) . PHP_EOL;
                echo 'Response:' . $response . PHP_EOL;
            }
        } catch (ClientException $e) {
            $statusCode = $e->getResponse()->getStatusCode();
            if ($statusCode === 401) {
                throw new UnauthorizedException();
            }
            throw $e;
        }

        return $response;
    }

    private function calcSign(array $params, string $secretKey): string
    {
        // 去除空值
        $newParams = [];
        foreach ($params as $key => $value) {
           if (!$value) {
               continue;
           }
           $newParams[$key] = $value;
        }
        // 按照 ASCII 码排序(升序)
        ksort($newParams);
        // 转为以 URL 形式的签名字符串
        $preStr = '';
        foreach ($newParams as $key => $value) {
            $preStr.= "$key=$value&";
        }
        // 返回签名
        return md5($preStr . '&key=' . $secretKey);
    }
}