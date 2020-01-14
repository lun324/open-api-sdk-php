<?php

namespace OpenApiSDK\Model;

/**
 * 手机号归属地
 * Class InputMatchPhoneProductListDto
 * @package OpenApiSDK\Model
 */
class InputMatchPhoneProductListDto implements InputInterface
{
    /**
     * 手机号
     * @var
     */
    public $phone;

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
            'phone' => $this->phone,
            'face_value' => $this->faceValue,
        ]);
    }
}
