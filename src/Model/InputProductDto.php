<?php

namespace OpenApiSDK\Model;

/**
 * 商品信息
 * Class InputProductDto
 * @package OpenApiSDK\Model
 */
class InputProductDto implements InputInterface
{
    /**
     * 商品编号
     * @var
     */
    public $productId;

    /**
     * @return false|string
     */
    public function toJson()
    {
        return json_encode([
            'product_id' => $this->productId,
        ]);
    }
}
