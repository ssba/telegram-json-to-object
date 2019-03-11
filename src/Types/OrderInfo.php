<?php

namespace ssba\TelegramJsonToObject\Types;

use ssba\TelegramJsonToObject\Transformers\OrderInfoTransformer;


/**
 * Class OrderInfo.
 *
 * This object represents information about an order.
 *
 * @link https://core.telegram.org/bots/api#orderinfo
 *
 */
class OrderInfo extends BaseObject
{
    /**
     * @var string
     */
    public static $transformer = OrderInfoTransformer::class;

    /**
     * Optional. User name
     *
     * @var string
     */
    public $name;

    /**
     * Optional. User's phone number
     *
     * @var integer
     */
    public $phone_number;

    /**
     * Optional. User email
     *
     * @var string
     */
    public $email;

    /**
     * Optional. User shipping address
     *
     * @var ShippingAddress
     */
    public $shipping_address;

}