<h1 align="center">多多客API SDK【拼多多开放平台】</h1>

<p align="center">
<a href="https://styleci.io/repos/139239444"><img src="https://styleci.io/repos/139239444/shield?branch=master" alt="styleci"></a>
<a href="https://packagist.org/packages/justmd5/duoduoke-sdk"><img src="https://img.shields.io/packagist/php-v/justmd5/duoduoke-sdk.svg" alt="PHP from Packagist"></a>
<a href="https://packagist.org/packages/justmd5/duoduoke-sdk"><img src="https://poser.pugx.org/justmd5/duoduoke-sdk/downloads.svg" alt="Total Downloadsn"></a>
    <a href="https://packagist.org/packages/justmd5/duoduoke-sdk"><img src="https://img.shields.io/github/stars/justmd5/duoduoke-sdk.svg?style=social&label=Stars" alt="GitHub stars"></a>
<a href="https://packagist.org/packages/justmd5/duoduoke-sdk"><img src="https://img.shields.io/github/license/justmd5/duoduoke-sdk.svg" alt="License"></a>
<a href="https://packagist.org/packages/justmd5/duoduoke-sdk"><img src="https://poser.pugx.org/justmd5/duoduoke-sdk/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/justmd5/duoduoke-sdk"><img src="https://poser.pugx.org/justmd5/duoduoke-sdk/v/unstable.svg" alt="Latest Unstable Version"></a>
<a href="https://app.fossa.io/projects/git%2Bgithub.com%2Fjustmd5%2Fduoduoke-sdk?ref=badge_shield" alt="FOSSA Status"><img src="https://app.fossa.io/api/projects/git%2Bgithub.com%2Fjustmd5%2Fduoduoke-sdk.svg?type=shield"/></a>
</p>

> 现推荐使用作者最新产出的[拼多多API SDK【拼多多开放平台】](https://github.com/justmd5/pindoduo-sdk) 
### 要求
1. PHP >= 7.0
2. **[Composer](https://getcomposer.org/)**
3. ext-curl 拓展
4. ext-json 拓展

### 安装

`composer require justmd5/duoduoke-sdk`

### 使用

```php

use Justmd5\DuoDuoKe\DuoDuoKe;

require __DIR__ . '/vendor/autoload.php';
$config = [
    'key'    => 'xxxxxx69e3940c6b93xxxxxx',
    'secret' => 'c2eda0c398xxxxxxbd63ff57bf22c05xxxxxx',
    'debug'  => false
];
$duoduoke = new DuoDuoKe($config);

```

### 调用示例
> 多多进宝商品详情查询 pdd.ddk.goods.detail
```php
$result   = $duoduoke->request('pdd.ddk.goods.detail', ['goods_id_list' => ['395581006']]);
```
### 文档
[拼多多开放平台](http://open.pinduoduo.com/)  · [官方文档](http://open.pinduoduo.com/#/apidocument)


### 感谢

-  [hanson/foundation-sdk](https://github.com/Hanson/foundation-sdk)

###  单元测试[on working]
配置 config 中所需配置
```shell
composer test 
```

## License

MIT



[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2Fjustmd5%2Fduoduoke-sdk.svg?type=large)](https://app.fossa.io/projects/git%2Bgithub.com%2Fjustmd5%2Fduoduoke-sdk?ref=badge_large)
