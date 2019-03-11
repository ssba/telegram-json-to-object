<?php

namespace ssba\TelegramJsonToObject\Types;

use ssba\TelegramJsonToObject\Transformers\InlineKeyboardMarkupTransformer;


/**
 * Class InlineKeyboardMarkup.
 *
 * This object represents an inline keyboard that appears right next to the message it belongs to.
 *
 * @link https://core.telegram.org/bots/api#inlinekeyboardmarkup
 *
 */
class InlineKeyboardMarkup extends BaseObject
{

    /**
     * @var string
     */
    public static $transformer = InlineKeyboardMarkupTransformer::class;

    /**
     * Unique identifier for this query
     *
     * @var array of array InlineKeyboardButton
     */
    public $inline_keyboard;

}