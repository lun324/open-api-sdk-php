<?php

namespace OpenApiSDK;

/**
 * 默认OpenApi客户请求接口
 * Interface IDefaultOpenApiClient
 * @package OpenApiSDK
 */
interface IDefaultOpenApiClient
{
    /**
     * 执行请求
     *
     * @return String
     */
    public function excute();

    /**
     * 设置业务参数
     * @param $bizContent
     * @return mixed
     */
    public function setBizContent($bizContent);

    /**
     * 设置业务参数
     * @param $bizObject
     * @return mixed
     */
    public function setBizObject($bizObject);
}
