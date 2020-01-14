# Fulu OpenApi SDK for PHP

## 概述

福禄开放平台API，是福禄开放平台对外提供的安全、低成本、高可靠的虚拟充值服务。用户可以通过调用API，在任何应用、任何时间、任何地点采购虚拟商品，也可以通过用户Web控制台对数据进行简单的管理。适合各种网站、开发企业及开发者使用。


## 运行环境
- PHP 5.6+
- ext-json
- ext-openssl
- ext-curl


## 安装方法

1. 如果您通过composer管理您的项目依赖，可以在你的项目根目录运行：

        $ composer require lun324/open-api-sdk-php

   或者在你的`composer.json`中声明对Fulu OpenApi SDK for PHP的依赖：

        "require": {
            "lun324/open-api-sdk-php": "2.0"
        }

   然后通过`composer install`安装依赖。composer安装完成后，在您的PHP代码中引入依赖即可：

        require_once __DIR__ . '/vendor/autoload.php';

2. 下载SDK源码，在您的代码中引入SDK目录下的`autoload.php`文件：

        require_once '/path/open-api-sdk-php/autoload.php';

## 快速使用

### 常用类

| 类名 | 解释 |
|:------------------|:------------------------------------|
|OpenApiSDK\DefaultOpenApiClient | OpenApi客户端类，用户通过DefaultOpenApiClient的实例调用接口 |
|OpenApiSDK\Common\ApiGlobalConst | 接口地址常量|
|OpenApiSDK\Common\CardUtil | 卡密解密工具类|
|OpenApiSDK\Model\InputCardOrderDto | 卡密商品取卡接口|
|OpenApiSDK\Model\InputDirectOrderDto | 直充商品下单接口|
|OpenApiSDK\Model\InputMatchPhoneProductListDto | 手机号归属地查询接口|
|OpenApiSDK\Model\InputOrderGetDto | 订单查询接口|
|OpenApiSDK\Model\InputPhoneOrderDto | 话费订单接口|
|OpenApiSDK\Model\InputProductDto | 商品信息接口|
|OpenApiSDK\Model\InputProductTemplateDto | 商品模板信息接口|
|OpenApiSDK\Model\InputTrafficOrderDto | 流量订单接口|
|OpenApiSDK\Model\InputUserDto | 用户信息接口|
### OpenApiClient初始化

OpenApi操作通过DefaultOpenApiClient类完成的，下面代码创建一个OpenApiClient对象:

```php
<?php
$appKey = "<您从福禄开放平台获得的appKey>"; ;
$appSecret = "<您从福禄开放平台获得的appSecret>";
$method = "<您需要调用的接口:从接口地址常量获取>" ;
// 初始化客户端
$defaultOpenApiClient = new DefaultOpenApiClient($apiGateway, $appKey, $appSecret, $method);

```

### 直充下单接口

```php
<?php
$request = new InputDirectOrderDto();
$request->customerOrderNo = '20191230142306472' . time();
$request->productId = 10000585;
$request->buyNum = 1;
$request->chargeAccount = '888888';
$defaultOpenApiClient->setBizObject($request);
$result = $defaultOpenApiClient->excute();

print_r($result);
```

### 卡密下单

```php
<?php
$request = new InputCardOrderDto();
$request->customerOrderNo = '20191230142306472' . time();
$request->productId = '10000587';
$request->buyNum = 1;
$defaultOpenApiClient->setBizObject($request);
$result = $defaultOpenApiClient->excute();

print_r($result);
```

### 话费下单接口

```php
<?php
$request = new InputPhoneOrderDto();
$request->customerOrderNo = '20191230142306472' . time();
$request->chargePhone = '15972368779';
$request->chargeValue = 50;
$defaultOpenApiClient->setBizObject($request);
$result = $defaultOpenApiClient->excute();

print_r($result);
```

### 订单查询接口

```php
<?php
$request = new InputOrderGetDto();
$request->customerOrderNo = '201912301423064721578987416';
$defaultOpenApiClient->setBizObject($request);
$result = $defaultOpenApiClient->excute();

print_r($result);
```

### 获取商品列表接口

```php
<?php
$request = new InputProductListDto();
$defaultOpenApiClient->setBizObject($request);
$result = $defaultOpenApiClient->excute();

print_r($result);

```
### 获取商品信息接口

```php
<?php
$request = new InputProductDto();
$request->productId = '10000587';
$defaultOpenApiClient->setBizObject($request);
$result = $defaultOpenApiClient->excute();

print_r($result);
```
### 获取商品模板接口

```php
<?php
$request = new InputProductTemplateDto();
$request->templateId = '10000587';
$defaultOpenApiClient->setBizObject($request);
$result = $defaultOpenApiClient->excute();

print_r($result);
```

### 获取用户信息接口

```php
<?php
$request = new InputUserDto();
$defaultOpenApiClient->setBizObject($request);
$result = $defaultOpenApiClient->excute();

print_r($result);
```


### 手机流量充值接口

```php
<?php
$request = new InputTrafficOrderDto();
$request->customerOrderNo = '20191230142306472' . time();
$request->chargePhone = '15972368779';
$request->chargeValue = 1024;
$request->packetKind = 4;
$defaultOpenApiClient->setBizObject($request);
$result = $defaultOpenApiClient->excute();

print_r($result);
```

### 手机号归属地接口

```php
<?php
$request = new InputMatchPhoneProductListDto();
$request->phone = '15972368779';
$defaultOpenApiClient->setBizObject($request);
$result = $defaultOpenApiClient->excute();

print_r($result);
```

### 运行Example程序

1. 修改 `example/index.php`， 中的 $appKey 、$appSecret 的值
2. 执行 `cd example/ && php index.php`

## License

- MIT

## 联系我们

- [福禄开放平台网站](http://open.fulu.com)
- [福禄开放平台官方文档中心](https://open.fulu.com/polymerization.html)

