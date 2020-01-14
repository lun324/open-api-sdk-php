<?php

namespace OpenApiSDK\Model;

/**
 * 用户信息
 * Class InputUserDto
 * @package OpenApiSDK\Model
 */
class InputUserDto implements InputInterface
{
    /**
     * @return false|string
     */
    public function toJson()
    {
        return '{}';
    }
}
