<?php

namespace Justmd5\DuoDuoKeTest;

/**
 * Created for duoduoke-sdk.
 * User: 丁海军
 * Date: 2018/9/21
 * Time: 16:30.
 */

namespace Justmd5\DuoDuoKeTest;

class OrderListIncrementTetTest extends DdkTestCase
{
    /**
     * @return array
     */
    public function testIsArray()
    {
        $params = [
            'type'              => 'pdd.ddk.order.list.increment.get',
            'start_update_time' => strtotime('-1 days'),
            'end_update_time'   => time(),
        ];
        $result = $this->app->request('pdd.ddk.order.list.increment.get', $params);
//        dd($result);
        $this->assertArrayHasKey('order_list_get_response', $result);

        return $result;
    }
}
