<?php

namespace OpenApiSDK\Model;

/**
 * 流量订单
 * Class InputTrafficOrderDto
 * @package OpenApiSDK\Model
 */
class InputTrafficOrderDto implements InputInterface
{
    /**
     * 外部订单号（应用订单号）
     * @var
     */
    public $customerOrderNo;

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
     * 流量性质 1:小时  2:日 3:7天 4:月 5:季度 6:半年 7:年
     * @var
     */
    public $packetKind;

    /**
     * @return false|string
     */
    public function toJson()
    {
        return json_encode([
            'customer_order_no' => $this->customerOrderNo,
            'charge_phone' => $this->chargePhone,
            'charge_value' => $this->chargeValue,
            'packet_kind' => $this->packetKind,
        ]);
    }
}
