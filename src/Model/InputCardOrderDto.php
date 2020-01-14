<?php

namespace OpenApiSDK\Model;

/**
 * Class InputCardOrderDto
 * @package OpenApiSDK\Model
 */
class InputCardOrderDto implements InputInterface
{
    /**
     * 外部订单号（应用订单号）
     * @var
     */
    public $customerOrderNo;

    /**
     * 商品Id
     * @var
     */
    public $productId;

    /**
     * 购买数量
     * @var
     */
    public $buyNum;

    /**
     * @return false|string
     */
    public function toJson()
    {
        return json_encode([
            'customer_order_no' => $this->customerOrderNo,
            'product_id' => $this->productId,
            'buy_num' => $this->buyNum,
        ]);
    }
}
