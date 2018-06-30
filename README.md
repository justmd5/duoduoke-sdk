<h1 align="center">多多客API SDK</h1>



## 要求
1. PHP >= 7.0
2. **[Composer](https://getcomposer.org/)**
3. ext-curl 拓展
4. ext-json 拓展

## 安装

`composer require justmd5/duoduoke-sdk`

### 使用

```php

use Justmd5\DuoDuoKe\DuoDuoKe;

require __DIR__ . '/vendor/autoload.php';
$config = [
    'key'    => 'xxxxxx69e3940c6b93xxxxxx',
    'secret' => 'c2eda0c398xxxxxxbd63ff57bf22c05xxxxxx',
];
$duoduoke = new DuoDuoKe($config);

```

### 调用示例
> 多多进宝商品详情查询 pdd.ddk.goods.detail
```
//$result   = $duoduoke->request('pdd.ddk.goods.detail', ['goods_id_list' => ['395581006']]);
```
## 文档
[拼多多开放平台](http://open.pinduoduo.com/)  · [官方文档](http://open.pinduoduo.com/#/apidocument)


### 感谢

-  [hanson/foundation-sdk](https://github.com/Hanson/foundation-sdk)

## License

MIT

