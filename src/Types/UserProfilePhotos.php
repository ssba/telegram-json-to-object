<?php

namespace ssba\TelegramJsonToObject\Types;

use ssba\TelegramJsonToObject\Transformers\UserProfilePhotosTransformer;


/**
 * Class UserProfilePhotos.
 *
 * This object represent a user's profile pictures.
 *
 * @link https://core.telegram.org/bots/api#userprofilephotos
 *
 */
class UserProfilePhotos extends BaseObject
{

    /**
     * @var string
     */
    public static $transformer = UserProfilePhotosTransformer::class;

    /**
     * Total number of profile pictures the target user has
     *
     * @var string
     */
    public $total_count;

    /**
     * Requested profile pictures (in up to 4 sizes each)
     *
     * @var array of array of PhotoSize
     */
    public $photos;

}