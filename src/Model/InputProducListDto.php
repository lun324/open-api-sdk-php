<?php

namespace OpenApiSDK\Model;

/**
 * 商品列表
 * Class InputProductDto
 * @package OpenApiSDK\Model
 */
class InputProductListDto implements InputInterface
{
    /**
     * 商品分类Id（一级）
     * @var
     */
    public $firstCategoryId;

    /**
     * 商品分类Id（二级）
     * @var
     */
    public $secondCategoryId;

    /**
     * 商品分类Id（三级）
     * @var
     */
    public $thirdCategoryId;

    /**
     * 商品编号
     * @var
     */
    public $productId;

    /**
     * 商品名称
     * @var
     */
    public $productName;

    /**
     * 库存类型：卡密、直充
     * @var
     */
    public $productType;

    /**
     * 面值
     * @var
     */
    public $faceValue;

    /**
     * @return false|string
     */
    public function toJson()
    {
        return json_encode([
            'first_category_id' => $this->firstCategoryId,
            'second_category_id' => $this->secondCategoryId,
            'third_category_id' => $this->thirdCategoryId,
            'product_id' => $this->productId,
            'product_name' => $this->productName,
            'product_type' => $this->productType,
            'face_value' => $this->faceValue,
        ]);
    }
}
