<?php
/**
 * Created for duoduoke-sdk
 * User: 丁海军
 * Date: 2018/6/30
 * Time: 下午2:56.
 */

namespace Justmd5\DuoDuoKe;

use Hanson\Foundation\AbstractAPI;
use Hanson\Foundation\Foundation;

class Api extends AbstractAPI
{
    const URL = 'http://gw-api.pinduoduo.com/api/router';
    protected $key;
    protected $secret;

    public function __construct(Foundation $app, $key, $secret)
    {
        parent::__construct($app);
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
        $paramsStr = '';
        array_walk($params, function ($item, $key) use (&$paramsStr) {
            if ('@' != substr($item, 0, 1)) {
                $paramsStr .= sprintf('%s%s', $key, $item);
            }
        });

        return strtoupper(md5(sprintf('%s%s%s', $this->secret, $paramsStr, $this->secret)));
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

        return strtolower($data_type) == 'json' ? json_decode($responseBody, true) : $responseBody;
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
