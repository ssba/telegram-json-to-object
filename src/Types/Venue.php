<?php

namespace ssba\TelegramJsonToObject\Types;

use ssba\TelegramJsonToObject\Transformers\VenueTransformer;


/**
 * Class Venue.
 *
 * This object represents a venue.
 *
 * @link https://core.telegram.org/bots/api#venue
 *
 */
class Venue extends BaseObject
{

    /**
     * @var string
     */
    public static $transformer = VenueTransformer::class;

    /**
     * Venue location
     *
     * @var Location
     */
    public $location;

    /**
     * Name of the venue
     *
     * @var string
     */
    public $title;

    /**
     * Address of the venue
     *
     * @var string
     */
    public $address;

    /**
     * Optional. Foursquare identifier of the venue
     *
     * @var string
     */
    public $foursquare_id;

    /**
     * Optional. Foursquare type of the venue. (For example, “arts_entertainment/default”, “arts_entertainment/aquarium” or “food/icecream”.)
     *
     * @var string
     */
    public $foursquare_type;

}