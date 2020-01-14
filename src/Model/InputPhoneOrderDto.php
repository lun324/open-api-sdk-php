<?php

namespace OpenApiSDK\Model;

/**
 * 话费订单
 * Class InputMatchPhoneProductListDto
 * @package OpenApiSDK\Model
 */
class InputPhoneOrderDto implements InputInterface
{
    /**
     * 充值手机号
     * @var
     */
    public $chargePhone;

    /**
     * 充值数额
     * @var
     */
    public $chargeValue;

    /**
     * 外部订单号（应用订单号）
     * @var
     */
    public $customerOrderNo;

    /**
     * @return false|string
     */
    public function toJson()
    {
        return json_encode([
            'charge_phone' => $this->chargePhone,
            'charge_value' => $this->chargeValue,
            'customer_order_no' => $this->customerOrderNo,
        ]);
    }
}
