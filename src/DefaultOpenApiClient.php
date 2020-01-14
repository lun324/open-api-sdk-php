<?php

namespace OpenApiSDK;

use OpenApiSDK\Common\FuluClient;
use OpenApiSDK\Model\InputRequestDto;

/**
 * 默认OpenApi客户请求实现
 * Class DefaultOpenApiClient
 * @package OpenApiSDK
 */
class DefaultOpenApiClient implements IDefaultOpenApiClient
{
    /**
     * 接口地址
     * @var
     */
    private $url;

    /**
     * 商户AppKey
     * @var
     */
    private $appKey;

    /**
     * 应用秘钥
     * @var
     */
    private $appSecret;

    /**
     * 方法
     * @var
     */
    private $method;

    /**
     * 业务参数
     * @var
     */
    private $bizContent;

    /**
     * @var
     */
    private $fuluClient;

    /**
     * DefaultOpenApiClient constructor.
     * @param $url
     * @param $appKey
     * @param $appSecret
     * @param $method
     */
    public function __construct($url, $appKey, $appSecret, $method)
    {
        $this->appKey = $appKey;
        $this->appSecret = $appSecret;
        $this->method = $method;

        if ($url) {
            $this->url = $url;
            $this->fuluClient = new FuluClient($this->url);
        } else {
            $this->fuluClient = new FuluClient();
        }
    }

    /**
     * @return String|void
     */
    public function excute()
    {
        $inputRequestDto = new InputRequestDto();
        $inputRequestDto->appKey = $this->appKey;
        $inputRequestDto->method = $this->method;
        $inputRequestDto->timestamp = date('Y-m-d H:i:s');
        $inputRequestDto->bizContent = $this->bizContent;
        // 签名
        $inputRequestDto->sign = $this->doSign(json_decode($inputRequestDto->toJson(), true));

        return $this->fuluClient->send($inputRequestDto->toJson());
    }

    /**
     * @param $bizContent
     * @return mixed|void
     */
    public function setBizContent($bizContent)
    {
        $this->bizContent = $bizContent;
    }

    /**
     * @param $bizObject
     * @return mixed|void
     */
    public function setBizObject($bizObject)
    {
        $this->bizContent = $bizObject->toJson();
    }

    /**
     * php签名方法
     * @param $requestParams
     * @return string
     */
    private function doSign($requestParams)
    {
        unset($requestParams['sign']);
        // 签名步骤一：把字典json序列化
        $json = json_encode($requestParams, 320);
        // 签名步骤二：转化为数组
        $jsonArr = $this->mbStrSplit($json);
        // 签名步骤三：排序
        sort($jsonArr);
        // 签名步骤四：转化为字符串
        $string = implode('', $jsonArr);
        // 签名步骤五：在string后加入secret
        $string .= $this->appSecret;
        // 签名步骤六：MD5加密
        return strtolower(md5($string));
    }

    /**
     * 可将字符串中中文拆分成字符数组
     * @param $str
     * @return array|false|string[]
     */
    private function mbStrSplit($str)
    {
        return preg_split('/(?<!^)(?!$)/u', $str );
    }
}


