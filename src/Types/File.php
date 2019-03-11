<?php

namespace ssba\TelegramJsonToObject\Types;

use ssba\TelegramJsonToObject\Transformers\InlineQueryTransformer;


/**
 * Class File.
 *
 * This object represents a file ready to be downloaded.
 * The file can be downloaded via the link https://api.telegram.org/file/bot<token>/<file_path>.
 * It is guaranteed that the link will be valid for at least 1 hour.
 * When the link expires, a new one can be requested by calling getFile.
 *
 * @link https://core.telegram.org/bots/api#inlinequery
 *
 */
class File extends BaseObject
{

    /**
     * Unique identifier for this file
     *
     * @var integer
     */
    public $file_id;

    /**
     * Optional. File size, if known
     *
     * @var string
     */
    public $file_size;

    /**
     * 	Optional. File path. Use https://api.telegram.org/file/bot<token>/<file_path> to get the file
     *
     * @var string
     */
    public $file_path;

}