<?php

namespace ssba\TelegramJsonToObject\Types;


/**
 * Class ShippingOption.
 *
 * This object represents one shipping option.
 *
 * @link https://core.telegram.org/bots/api#shippingoption
 *
 */
class ShippingOption extends BaseObject
{

    /**
     * Shipping option identifier
     *
     * @var string
     */
    public $id;

    /**
     * Option title
     *
     * @var string
     */
    public $title;

    /**
     * List of price portions
     *
     * @var array of LabeledPrice
     */
    public $prices;

}