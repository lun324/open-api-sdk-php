<?php

namespace OpenApiSDK\Model;

/**
 * 商品模板信息
 * Class InputProductDto
 * @package OpenApiSDK\Model
 */
class InputProductTemplateDto implements InputInterface
{
    /**
     * 商品模板编号
     * @var
     */
    public $templateId;

    /**
     * @return false|string
     */
    public function toJson()
    {
        return json_encode([
            'template_id' => $this->templateId,
        ]);
    }
}
