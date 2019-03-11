<?php

namespace ssba\TelegramJsonToObject\Types;

use ssba\TelegramJsonToObject\Transformers\VideoTransformer;


/**
 * Class Video.
 *
 * This object represents a video file.
 *
 * @link https://core.telegram.org/bots/api#video
 *
 */
class Video extends BaseObject
{
    /**
     * @var string
     */
    public static $transformer = VideoTransformer::class;

    /**
     * Unique identifier for this file
     *
     * @var string
     */
    public $file_id;

    /**
     * Video width as defined by sender
     *
     * @var integer
     */
    public $width;

    /**
     * Video height as defined by sender
     *
     * @var integer
     */
    public $height;

    /**
     * Duration of the video in seconds as defined by sender
     *
     * @var integer
     */
    public $duration;

    /**
     * Optional. Video thumbnail
     *
     * @var PhotoSize
     */
    public $thumb;

    /**
     * Optional. MIME type of the file as defined by sender
     *
     * @var string
     */
    public $mime_type;

    /**
     * Optional. File size
     *
     * @var integer
     */
    public $file_size;

}