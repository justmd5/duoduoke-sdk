<?php

namespace Justmd5\DuoDuoKeTest;

/**
 * Created for duoduoke-sdk.
 * User: 丁海军
 * Date: 2018/9/21
 * Time: 16:30
 */

namespace Justmd5\DuoDuoKeTest;

class GoodsDetailTest extends DdkTestCase
{
    /**
     * @return array
     */
    public function testIsArray()
    {
        $result = $this->app->request('pdd.ddk.goods.detail', ['goods_id_list' => [$this->goodsIdList[0]]]);
        $this->assertArrayHasKey('goods_detail_response', $result);

        return $result;
    }

    /**
     * @param  array $result
     *
     * @depends   testIsArray
     */
    public function testDetail($result)
    {
        $this->assertCount(1, $result['goods_detail_response']['goods_details'], '商品详情错误');
    }
}