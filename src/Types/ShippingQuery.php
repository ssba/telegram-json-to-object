<?php

namespace ssba\TelegramJsonToObject\Types;

use ssba\TelegramJsonToObject\Transformers\ShippingQueryTransformer;


/**
 * Class ShippingQuery.
 *
 * This object contains information about an incoming shipping query.
 *
 * @link https://core.telegram.org/bots/api#shippingquery
 *
 */
class ShippingQuery extends BaseObject
{

    /**
     * @var string
     */
    public static $transformer = ShippingQueryTransformer::class;

    /**
     * Unique query identifier
     *
     * @var string
     */
    public $id;

    /**
     * User who sent the query
     *
     * @var User
     */
    public $from;

    /**
     * Bot specified invoice payload
     *
     * @var string
     */
    public $invoice_payload;

    /**
     * User specified shipping address
     *
     * @var ShippingAddress
     */
    public $shipping_address;

}