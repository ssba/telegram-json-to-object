<?php

namespace ssba\TelegramJsonToObject\Types;

use ssba\TelegramJsonToObject\Transformers\DocumentTransformer;

/**
 * Class Document.
 *
 * This object represents a general file (as opposed to photos, voice messages and audio files).
 *
 * @link https://core.telegram.org/bots/api#document
 *
 */
class Document extends BaseObject
{
    /**
     * @var string
     */
    public static $transformer = DocumentTransformer::class;

    /**
     * 	Unique identifier for this file
     *
     * @var string
     */
    public $file_id;

    /**
     * Optional. Document thumbnail as defined by sender
     *
     * @var PhotoSize
     */
    public $thumb;

    /**
     * Optional. Original filename as defined by sender
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