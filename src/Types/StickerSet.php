<?php

namespace ssba\TelegramJsonToObject\Types;

use ssba\TelegramJsonToObject\Transformers\StickerSetTransformer;


/**
 * Class StickerSet.
 *
 * This object represents a sticker set.
 *
 * @link https://core.telegram.org/bots/api#stickerset
 *
 */
class StickerSet extends BaseObject
{
    /**
     * @var string
     */
    public static $transformer = StickerSetTransformer::class;

    /**
     * Sticker set name
     *
     * @var string
     */
    public $name;

    /**
     * Sticker set title
     *
     * @var string
     */
    public $title;

    /**
     * 	True, if the sticker set contains masks
     *
     * @var boolean
     */
    public $contains_masks;

    /**
     * List of all set stickers
     *
     * @var array of Sticker
     */
    public $stickers;

}