<?php

namespace ssba\TelegramJsonToObject\Types;

/**
 * Class ChatPhoto.
 *
 * This object represents a chat photo.
 *
 * @link https://core.telegram.org/bots/api#chatphoto
 *
 */
class ChatPhoto extends BaseObject
{

    /**
     * Unique file identifier of small (160x160) chat photo. This file_id can be used only for photo download.
     *
     * @var string
     */
    public $small_file_id;

    /**
     * Unique file identifier of big (640x640) chat photo. This file_id can be used only for photo download.
     *
     * @var string
     */
    public $big_file_id;

}
