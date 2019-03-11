<?php

namespace ssba\TelegramJsonToObject\Types;

use ssba\TelegramJsonToObject\Transformers\AnimationTransformer;


/**
 * Class Animation.
 *
 * This object represents an animation file (GIF or H.264/MPEG-4 AVC video without sound).
 *
 * @link https://core.telegram.org/bots/api#animation
 *
 */
class Animation extends BaseObject
{
    /**
     * @var string
     */
    public static $transformer = AnimationTransformer::class;

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
     * Optional. Animation thumbnail as defined by sender
     *
     * @var PhotoSize
     */
    public $thumb;

    /**
     * Optional. Original animation filename as defined by sender
     *
     * @var string
     */
    public $file_name;

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