<?php

namespace ssba\TelegramJsonToObject\Types;


/**
 * Class Voice.
 *
 * This object represents a voice note.
 *
 * @link https://core.telegram.org/bots/api#voice
 *
 */
class Voice extends BaseObject
{

    /**
     * Unique identifier for this file
     *
     * @var string
     */
    public $file_id;

    /**
     * Duration of the audio in seconds as defined by sender
     *
     * @var integer
     */
    public $duration;

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