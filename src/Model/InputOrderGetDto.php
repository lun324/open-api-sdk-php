<?php

namespace OpenApiSDK\Model;

/**
 * 订单查询接口
 * Class InputMatchPhoneProductListDto
 * @package OpenApiSDK\Model
 */
class InputOrderGetDto implements InputInterface
{
    /**
     * 外部订单号，每次请求必须唯一
     * @var
     */
    public $customerOrderNo;

    /**
     * @return false|string
     */
    public function toJson()
    {
        return json_encode([
            'customer_order_no' => $this->customerOrderNo
        ]);
    }
}
