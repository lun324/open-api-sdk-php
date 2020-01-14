<?php

namespace OpenApiSDK\Model;

/**
 * 公共请求参数input dto
 * Class InputRequestDto
 * @package OpenApiSDK\Model
 */
class InputRequestDto implements InputInterface
{
    /**
     * 开放平台分配给商户的AppKey
     * @var
     */
    public  $appKey;

    /**
     * 接口方法名称
     * @var
     */
    public  $method;

    /**
     * 时间，格式为：yyyy-MM-dd HH:mm:ss
     * @var
     */
    public  $timestamp;

    /**
     * 调用的接口版本
     * @var
     */
    public $version = '2.0';

    /**
     * 目前仅支持json
     * @var string
     */
    public $format = 'json';

    /**
     * 请求使用的编码格式，如utf-8
     * @var string
     */
    public $charset = 'utf-8';

    /**
     * 签名加密类型，目前仅支持md5
     * @var string
     */
    public $signType = 'md5';

    /**
     * 签名
     * @var string
     */
    public $sign = '';

    /**
     * 应用授权auth_token
     * @var string
     */
    public $appAuthToken = "";

    /**
     * 请求参数集合
     * @var string
     */
    public $bizContent = "";

    /**
     * @return false|string
     */
    public function toJson()
    {
        return json_encode([
            'app_key' => $this->appKey,
            'method' => $this->method,
            'timestamp' => $this->timestamp,
            'version' => $this->version,
            'format' => $this->format,
            'charset' => $this->charset,
            'sign_type' => $this->signType,
            'sign' => $this->sign,
            'app_auth_token' => $this->appAuthToken,
            'biz_content' => $this->bizContent,
        ]);
    }
}

