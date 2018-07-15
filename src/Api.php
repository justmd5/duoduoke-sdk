<?php
/**
 * Created for duoduoke-sdk
 * User: 丁海军
 * Date: 2018/6/30
 * Time: 下午2:56.
 */

namespace Justmd5\DuoDuoKe;

use Hanson\Foundation\AbstractAPI;

class Api extends AbstractAPI
{
    const URL = 'http://gw-api.pinduoduo.com/api/router';
    private $key;
    private $secret;

    public function __construct($key, $secret)
    {
        $this->key = $key;
        $this->secret = $secret;
    }

    /**
     * @param $params
     *
     * @return string
     */
    private function signature($params)
    {
        ksort($params);
        $sign = $this->secret;
        array_walk($params, function ($item, $key) use (&$sign) {
            if (!is_array($item) && '@' != substr($item, 0, 1)) {
                $sign .= sprintf('%s%s', $key, $item);
            }
        });
        $sign .= $this->secret;

        return strtoupper(md5($sign));
    }

    /**
     * @param string $method
     * @param array  $params
     * @param string $data_type
     *
     * @return mixed
     */
    public function request($method, $params, $data_type = 'JSON')
    {
        $http = $this->getHttp();
        $params = $this->paramsHandle($params);
        $params['client_id'] = $this->key;
        $params['sign_method'] = 'md5';
        $params['type'] = $method;
        $params['data_type'] = $data_type;
        $params['timestamp'] = strval(time());
        $params['sign'] = $this->signature($params);
        $response = call_user_func_array([$http, 'post'], [self::URL, $params]);
        $responseBody = strval($response->getBody());

        return $data_type ? json_decode($responseBody, true) : $responseBody;
    }

    /**
     * @param array $params
     *
     * @return array
     */
    protected function paramsHandle(array $params)
    {
        array_walk($params, function (&$item) {
            if (is_array($item)) {
                $item = json_encode($item);
            }
            if (is_bool($item)) {
                $item = ['false', 'true'][intval($item)];
            }
        });

        return $params;
    }
}
