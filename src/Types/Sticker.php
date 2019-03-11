<?php

namespace ssba\TelegramJsonToObject\Types;

use ssba\TelegramJsonToObject\Transformers\StickerTransformer;


/**
 * Class Sticker.
 *
 * This object represents a sticker.
 *
 * @link https://core.telegram.org/bots/api#sticker
 *
 */
class Sticker extends BaseObject
{
    /**
     * @var string
     */
    public static $transformer = StickerTransformer::class;

    /**
     * Unique identifier for this file
     *
     * @var string
     */
    public $file_id;

    /**
     * Sticker width
     *
     * @var integer
     */
    public $width;

    /**
     * Sticker height
     *
     * @var integer
     */
    public $height;

    /**
     * Optional. Sticker thumbnail in the .webp or .jpg format
     *
     * @var PhotoSize
     */
    public $thumb;

    /**
     * Optional. Emoji associated with the sticker
     *
     * @var string
     */
    public $emoji;

    /**
     * Optional. Name of the sticker set to which the sticker belongs
     *
     * @var string
     */
    public $set_name;

    /**
     * Optional. For mask stickers, the position where the mask should be placed
     *
     * @var MaskPosition
     */
    public $mask_position;

    /**
     * Optional. File size
     *
     * @var integer
     */
    public $file_size;

}