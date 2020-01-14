<?php

namespace OpenApiSDK\Model;

/**
 * 直充商品订单
 * Class InputCardOrderDto
 * @package OpenApiSDK\Model
 */
class InputDirectOrderDto implements InputInterface
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
     * 充值账号
     * @var
     */
    public $chargeAccount = '';

    /**
     * 下单真实Ip，区域商品要传
     * @var
     */
    public $chargeIp = '';

    /**
     * 充值密码，部分游戏类要传
     * @var
     */
    public $chargePassword = '';

    /**
     * 充值游戏名称
     * @var
     */
    public $chargeGameName = '';

    /**
     * 充值游戏角色
     * @var
     */
    public $chargeGameRole = '';

    /**
     * 充值游戏区
     * @var
     */
    public $chargeGameRegion = '';

    /**
     * @var
     */
    public $chargeGameSrv = '';

    /**
     * 充值类型
     * @var
     */
    public $chargeType = '';

    /**
     * 联系电话
     * @var
     */
    public $contactTel = '';

    /**
     * 联系QQ
     * @var
     */
    public $contactQQ = '';

    /**
     * @return false|string
     */
    public function toJson()
    {
        return json_encode([
            'customer_order_no' => $this->customerOrderNo,
            'product_id' => $this->productId,
            'buy_num' => $this->buyNum,
            'charge_account' => $this->chargeAccount,
            'charge_password' => $this->chargePassword,
            'charge_game_role' => $this->chargeGameRole,
            'charge_game_region' => $this->chargeGameRegion,
            'charge_ip' => $this->chargeIp,
            'charge_game_name' => $this->chargeGameName,
            'charge_game_srv' => $this->chargeGameSrv,
            'charge_type' => $this->chargeType,
            'contact_tel' => $this->contactTel,
            'contact_qq' => $this->contactQQ,
        ]);
    }
}
