<?php
// 设置默认时区
date_default_timezone_set("PRC");

require_once __DIR__ . '/../autoload.php';

use \OpenApiSDK\DefaultOpenApiClient;
use \OpenApiSDK\Common\ApiGlobalConst;
use \OpenApiSDK\Model\InputDirectOrderDto;
use \OpenApiSDK\Model\InputCardOrderDto;
use \OpenApiSDK\Model\InputPhoneOrderDto;
use \OpenApiSDK\Model\InputOrderGetDto;
use \OpenApiSDK\Model\InputProductListDto;
use \OpenApiSDK\Model\InputProductDto;
use \OpenApiSDK\Model\InputProductTemplateDto;
use \OpenApiSDK\Model\InputUserDto;
use \OpenApiSDK\Model\InputMatchPhoneProductListDto;
use \OpenApiSDK\Model\InputTrafficOrderDto;


function logs($content, $api = '')
{
    file_put_contents('logs/' . date('Y-n-d') . '.txt', "$api " . json_encode($content, JSON_UNESCAPED_UNICODE) . PHP_EOL, FILE_APPEND);
}

// 当前$apiGateway、appKey、appSecret为测试使用，生产环境请修改为您从平台获取的值
$apiGateway = 'http://pre.openapi.fulu.com/api/getway';
$appKey = 'i4esv1l+76l/7NQCL3QudG90Fq+YgVfFGJAWgT+7qO1Bm9o/adG/1iwO2qXsAXNB';
$appSecret = '0a091b3aa4324435aab703142518a8f7';

// 初始化客户端
$defaultOpenApiClient = new DefaultOpenApiClient($apiGateway, $appKey, $appSecret, ApiGlobalConst::OPEN_API_DIRECT_ORDER_ADD);
// 直充下单接口
$request = new InputDirectOrderDto();
$request->customerOrderNo = '20191230142306472' . time();
$request->customerPrice = 1;
$request->productId = 10000585;
$request->buyNum = 1;
$request->chargeAccount = '888888';
$defaultOpenApiClient->setBizObject($request);
$result = $defaultOpenApiClient->excute();

logs($result, '直充下单接口');
print_r($result);

// 初始化客户端
$defaultOpenApiClient = new DefaultOpenApiClient($apiGateway, $appKey, $appSecret, ApiGlobalConst::OPEN_API_CARD_ORDER_ADD);
// 卡密下单接口
$request = new InputCardOrderDto();
$request->customerOrderNo = '2019123012306472' . time();
$request->productId = '10000587';
$request->buyNum = 1;
$defaultOpenApiClient->setBizObject($request);
$result = $defaultOpenApiClient->excute();

logs($result, '卡密下单接口');
print_r($result);

// 初始化客户端
$defaultOpenApiClient = new DefaultOpenApiClient($apiGateway, $appKey, $appSecret, ApiGlobalConst::OPEN_API_PHONE_ORDER_ADD);
// 话费下单接口
$customerOrderNo = '2019123014230672' . time();
$request = new InputPhoneOrderDto();
$request->customerOrderNo = $customerOrderNo;
$request->chargePhone = '15972368779';
$request->chargeValue = 50;
$defaultOpenApiClient->setBizObject($request);
$result = $defaultOpenApiClient->excute();

logs($result, '话费下单接口');
print_r($result);

// 初始化客户端
$defaultOpenApiClient = new DefaultOpenApiClient($apiGateway, $appKey, $appSecret, ApiGlobalConst::OPEN_API_ORDER_GET);
// 订单查询接口
$request = new InputOrderGetDto();
$request->customerOrderNo = $customerOrderNo;
$defaultOpenApiClient->setBizObject($request);
$result = $defaultOpenApiClient->excute();

logs($result, '订单查询接口');
print_r($result);

// 初始化客户端
$defaultOpenApiClient = new DefaultOpenApiClient($apiGateway, $appKey, $appSecret, ApiGlobalConst::OPEN_API_GOODS_LIST_GET);
// 获取商品列表接口
$request = new InputProductListDto();
$defaultOpenApiClient->setBizObject($request);
$result = $defaultOpenApiClient->excute();

logs($result, '获取商品列表接口');
print_r($result);

// 初始化客户端
$defaultOpenApiClient = new DefaultOpenApiClient($apiGateway, $appKey, $appSecret, ApiGlobalConst::OPEN_API_GOODS_GET);
// 获取商品信息接口
$request = new InputProductDto();
$request->productId = '10000587';
$defaultOpenApiClient->setBizObject($request);
$result = $defaultOpenApiClient->excute();

logs($result, '获取商品信息接口');
print_r($result);

// 初始化客户端
$defaultOpenApiClient = new DefaultOpenApiClient($apiGateway, $appKey, $appSecret, ApiGlobalConst::OPEN_API_GOODS_TEMPLATE_GET);
// 获取商品模板接口
$request = new InputProductTemplateDto();
$request->templateId = '10000587';
$defaultOpenApiClient->setBizObject($request);
$result = $defaultOpenApiClient->excute();

logs($result, '获取商品模板接口');
print_r($result);

// 初始化客户端
$defaultOpenApiClient = new DefaultOpenApiClient($apiGateway, $appKey, $appSecret, ApiGlobalConst::OPEN_API_USER_INFO_GET);
// 获取用户信息接口
$request = new InputUserDto();
$defaultOpenApiClient->setBizObject($request);
$result = $defaultOpenApiClient->excute();

logs($result, '获取用户信息接口');
print_r($result);

// 初始化客户端
$defaultOpenApiClient = new DefaultOpenApiClient($apiGateway, $appKey, $appSecret, ApiGlobalConst::OPEN_API_TRAFFIC_ORDER_ADD);
// 手机流量充值接口
$request = new InputTrafficOrderDto();
$request->customerOrderNo = '20191230142306472' . time();
$request->chargePhone = '15972368779';
$request->chargeValue = 1024;
$request->packetKind = 4;
$defaultOpenApiClient->setBizObject($request);
$result = $defaultOpenApiClient->excute();

logs($result, '手机流量充值接口');
print_r($result);

// 初始化客户端
$defaultOpenApiClient = new DefaultOpenApiClient($apiGateway, $appKey, $appSecret, ApiGlobalConst::OPEN_API_CHECK_PHONE);
// 手机号归属地接口
$request = new InputMatchPhoneProductListDto();
$request->phone = '15972368779';
$defaultOpenApiClient->setBizObject($request);
$result = $defaultOpenApiClient->excute();

logs($result, '手机号归属地接口');
print_r($result);


