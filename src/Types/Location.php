<?php

namespace ssba\TelegramJsonToObject\Types;


/**
 * Class Location.
 *
 * This object represents a point on the map.
 *
 * @link https://core.telegram.org/bots/api#location
 *
 */
class Location extends BaseObject
{
    /**
     * Longitude as defined by sender
     *
     * @var float
     */
    public $longitude;

    /**
     * 	Latitude as defined by sender
     *
     * @var float
     */
    public $latitude;

}