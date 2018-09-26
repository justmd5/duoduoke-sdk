<?php
/**
 * Created for duoduoke-sdk.
 * User: yc
 * Date: 2018/9/26
 * Time: 20:56.
 */

namespace Justmd5\DuoDuoKeTest;

class GoodsPromotionUrlGenerateTest extends DdkTestCase
{
    /**
     * @return array
     */
    public function testIsArray()
    {
        $params = [
            'type'              => 'pdd.ddk.goods.promotion.url.generate',
            'p_id'              => $this->config['p_id'][0],
            'generate_weapp'    => true,
            'goods_id_list'     => [$this->config['goodsList'][0]],
        ];
        $result = $this->app->request('pdd.ddk.goods.promotion.url.generate', $params);
//        dd($result);
        $this->assertArrayHasKey('goods_promotion_url_generate_response', $result);

        return $result;
    }
}
