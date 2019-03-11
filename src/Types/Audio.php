<?php

namespace ssba\TelegramJsonToObject\Types;

use ssba\TelegramJsonToObject\Transformers\AudioTransformer;


/**
 * Class Audio.
 *
 * This object represents an audio file to be treated as music by the Telegram clients.
 *
 * @link https://core.telegram.org/bots/api#audio
 *
 */
class Audio extends BaseObject
{
    /**
     * @var string
     */
    public static $transformer = AudioTransformer::class;

    /**
     * 	Unique identifier for this file
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
     * Optional. Performer of the audio as defined by sender or by audio tags
     *
     * @var string
     */
    public $performer;

    /**
     * Optional. Title of the audio as defined by sender or by audio tags
     *
     * @var string
     */
    public $title;

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

    /**
     * Optional. Thumbnail of the album cover to which the music file belongs
     *
     * @var PhotoSize
     */
    public $thumb;

}