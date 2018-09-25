<?php

namespace Justmd5\DuoDuoKeTest;

use Justmd5\DuoDuoKe\DuoDuoKe;
use PHPUnit\Framework\TestCase;

/**
 * Created for duoduoke-sdk.
 * User: 丁海军
 * Date: 2018/9/21
 * Time: 16:34.
 */
abstract class DdkTestCase extends TestCase
{
    /**
     * @var array
     */
    protected $goodsIdList;
    /**
     * @var DuoDuoKe
     */
    protected $app;
    /**
     * @var array
     */
    protected $config;

    protected function setUp()
    {
        parent::setUp();
        $this->config = require __DIR__.'/config.php';
        $this->app = new DuoDuoKe($this->config);
        $this->goodsIdList = $this->config['goodsList'];
    }
}
