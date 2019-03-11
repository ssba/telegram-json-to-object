<?php

namespace ssba\TelegramJsonToObject\Types;
use ssba\TelegramJsonToObject\Transformers\ChatTransformer;

/**
 * Class InputMediaPhoto.
 *
 * Represents a photo to be sent.
 *
 * @link https://core.telegram.org/bots/api#inputmediaphoto
 *
 */
class InputMediaPhoto extends BaseObject
{
    /**
     * Type of the result, must be photo
     *
     * @var integer
     */
    public $type = "photo";

    /**
     * File to send. Pass a file_id to send a file that exists on the Telegram servers (recommended),
     * pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://<file_attach_name>”
     * to upload a new one using multipart/form-data under <file_attach_name> name.
     *
     * @var string
     */
    public $media;

    /**
     * Optional. Caption of the photo to be sent, 0-1024 characters
     *
     * @var string
     */
    public $caption;

    /**
     * Optional. Send Markdown or HTML, if you want Telegram apps to show bold,
     * italic, fixed-width text or inline URLs in the media caption.
     *
     * @var string
     */
    public $parse_mode;

}
