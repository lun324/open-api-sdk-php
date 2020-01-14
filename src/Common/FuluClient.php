<?php

namespace OpenApiSDK\Common;

/**
 * Class FuluClient
 * @package OpenApiSDk\Common
 */
class FuluClient
{
    /**
     * @var string
     */
    public $url = 'http://openapi.fulu.com/api/getway';

    /**
     * FuluClient constructor.
     * @param string $url
     */
    public function __construct($url = '')
    {
        if ($url) {
            $this->url = $url;
        }
    }

    /**
     * @param $sendData
     * @return bool|string
     */
    public function send($sendData)
    {
        //初始化
        $curl = curl_init();
        //设置抓取的url
        curl_setopt($curl, CURLOPT_URL, $this->url);
        // 设置头文件的信息作为数据流输出
        curl_setopt($curl, CURLOPT_HEADER, 1);
        // 设置获取的信息以文件流的形式返回，而不是直接输出。
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        //设置post方式提交
        curl_setopt($curl, CURLOPT_POST, 1);
        //设置post数据
        curl_setopt($curl, CURLOPT_POSTFIELDS, $sendData);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json; charset=utf-8',
                'Content-Length:' . strlen($sendData)
            ]
        );
        //执行命令
        $response = curl_exec($curl);
        //显示获得的数据
        if (curl_getinfo($curl, CURLINFO_HTTP_CODE) == '200') {
            list($header, $body) = explode("\r\n\r\n", $response, 2);
        }
        //关闭URL请求
        curl_close($curl);
        return json_decode($body);
    }
}
