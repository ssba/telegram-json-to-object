<?php

namespace ssba\TelegramJsonToObject\Types;

use ssba\TelegramJsonToObject\Transformers\VideoNoteTransformer;

/**
 * Class VideoNote.
 *
 * This object represents a video message (available in Telegram apps as of v.4.0).
 *
 * @link https://core.telegram.org/bots/api#videonote
 *
 */
class VideoNote extends BaseObject
{
    /**
     * @var string
     */
    public static $transformer = VideoNoteTransformer::class;

    /**
     * 	Unique identifier for this file
     *
     * @var string
     */
    public $file_id;

    /**
     * Video width and height (diameter of the video message) as defined by sender
     *
     * @var integer
     */
    public $length;

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
     * Optional. File size
     *
     * @var integer
     */
    public $file_size;

}