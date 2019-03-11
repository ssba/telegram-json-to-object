<?php

namespace ssba\TelegramJsonToObject\Types;

use ssba\TelegramJsonToObject\Transformers\PreCheckoutQueryTransformer;


/**
 * Class PreCheckoutQuery.
 *
 * This object contains information about an incoming pre-checkout query.
 *
 * @link https://core.telegram.org/bots/api#precheckoutquery
 *
 */
class PreCheckoutQuery extends BaseObject
{

    /**
     * @var string
     */
    public static $transformer = PreCheckoutQueryTransformer::class;

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
     * Three-letter ISO 4217 currency code
     *
     * @var string
     */
    public $currency;

    /**
     * Total price in the smallest units of the currency (integer, not float/double).
     * For example, for a price of US$ 1.45 pass amount = 145.
     * See the exp parameter in currencies.json, it shows the number of digits past the
     * decimal point for each currency (2 for the majority of currencies).
     *
     * @var integer
     */
    public $total_amount;

    /**
     * Bot specified invoice payload
     *
     * @var string
     */
    public $invoice_payload;

    /**
     * Optional. Identifier of the shipping option chosen by the user
     *
     * @var string
     */
    public $shipping_option_id;

    /**
     * Optional. Order info provided by the user
     *
     * @var OrderInfo
     */
    public $order_info;

}