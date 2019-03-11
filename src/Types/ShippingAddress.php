<?php

namespace ssba\TelegramJsonToObject\Types;


/**
 * Class ShippingAddress.
 *
 * This object represents a shipping address.
 *
 * @link https://core.telegram.org/bots/api#shippingaddress
 *
 */
class ShippingAddress extends BaseObject
{

    /**
     * ISO 3166-1 alpha-2 country code
     *
     * @var string
     */
    public $country_code;

    /**
     * State, if applicable
     *
     * @var integer
     */
    public $state;

    /**
     * City
     *
     * @var string
     */
    public $city;

    /**
     * First line for the address
     *
     * @var integer
     */
    public $street_line1;

    /**
     * Second line for the address
     *
     * @var string
     */
    public $street_line2;

    /**
     * Address post code
     *
     * @var integer
     */
    public $post_code;
}