<?php

namespace ssba\TelegramJsonToObject\Types;


/**
 * Class PhotoSize.
 *
 * This object represents one size of a photo or a file / sticker thumbnail.
 *
 * @link https://core.telegram.org/bots/api#photosize
 *
 */
class PhotoSize extends BaseObject
{
    /**
     * 	Unique identifier for this file
     *
     * @var string
     */
    public $file_id;

    /**
     * Photo width
     *
     * @var integer
     */
    public $width;

    /**
     * Photo height
     *
     * @var integer
     */
    public $height;

    /**
     * Optional. File size
     *
     * @var integer
     */
    public $file_size;

}