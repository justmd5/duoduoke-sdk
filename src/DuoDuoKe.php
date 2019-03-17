<?php
/**
 * Created for duoduoke-sdk
 * User: 丁海军
 * Date: 2018/6/30
 * Time: 下午3:18.
 */

namespace Justmd5\DuoDuoKe;

use Hanson\Foundation\Foundation;

class DuoDuoKe extends Foundation
{
    /**
     * @param string $method
     * @param array  $params
     *
     * @return mixed
     */
    public function request($method, $params = [])
    {
        $api = new Api($this->getConfig('key'), $this->getConfig('secret'));

        return $api->request($method, $params);
    }
}
