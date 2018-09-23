<?php

namespace Justmd5\DuoDuoKeTest;

use Justmd5\DuoDuoKe\DuoDuoKe;
use PHPUnit\Framework\TestCase;

/**
 * Created for duoduoke-sdk.
 * User: 丁海军
 * Date: 2018/9/21
 * Time: 16:34
 */
abstract class DdkTestCase extends TestCase
{
    /**
     * @var $goodsIdList array
     */
    protected $goodsIdList;
    /**
     * @var $app DuoDuoKe
     */
    protected $app;

    protected function setUp()
    {
        parent::setUp();
//        if()
        $config            = require_once __DIR__ . '/config.php';
        $this->app         = new DuoDuoKe($config);
        $this->goodsIdList = $config['goodsList'];
    }
}