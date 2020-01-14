<?php

namespace OpenApiSDK\Common;

/**
 * Class ApiGlobalConst
 * @package OpenApiSDK\Common
 */
class ApiGlobalConst
{
    /**
     * 获取商品列表接口方法
     */
    const OPEN_API_GOODS_LIST_GET = 'fulu.goods.list.get';

    /**
     * 获取商品信息接口方法
     */
    const OPEN_API_GOODS_GET = 'fulu.goods.info.get';

    /**
     * 获取商品模板信息接口方法
     */
    const OPEN_API_GOODS_TEMPLATE_GET = 'fulu.goods.template.get';

    /**
     * 获取用户信息接口方法
     */
    const OPEN_API_USER_INFO_GET = 'fulu.user.info.get';

    /**
     * 直充下单接口方法
     */
    const OPEN_API_DIRECT_ORDER_ADD = 'fulu.order.direct.add';

    /**
     * 话费下单接口方法
     */
    const OPEN_API_PHONE_ORDER_ADD = 'fulu.order.mobile.add';

    /**
     * 流量下单接口方法
     */
    const OPEN_API_TRAFFIC_ORDER_ADD = 'fulu.order.data.add';

    /**
     * 卡密下单接口方法
     */
    const OPEN_API_CARD_ORDER_ADD = 'fulu.order.card.add';

    /**
     * 查单接口方法
     */
    const OPEN_API_ORDER_GET = 'fulu.order.info.get';

    /**
     * 根据话费查询归属地和城市编码，面值，城市等信息
     */
    const OPEN_API_CHECK_PHONE = 'fulu.mobile.info.get';

}
