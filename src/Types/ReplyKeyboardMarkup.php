<?php

namespace ssba\TelegramJsonToObject\Types;

use ssba\TelegramJsonToObject\Transformers\ReplyKeyboardMarkupTransformer;


/**
 * Class ReplyKeyboardMarkup.
 *
 * This object represents a custom keyboard with reply options (see Introduction to bots for details and examples).
 *
 * @link https://core.telegram.org/bots/api#inlinequery
 *
 */
class ReplyKeyboardMarkup extends BaseObject
{

    /**
     * @var string
     */
    public static $transformer = ReplyKeyboardMarkupTransformer::class;

    /**
     * Array of button rows, each represented by an Array of KeyboardButton objects
     *
     * @var array of array of KeyboardButton
     */
    public $id;

    /**
     * Optional. Requests clients to resize the keyboard vertically for optimal fit (e.g., make the keyboard smaller
     * if there are just two rows of buttons). Defaults to false, in which case the custom
     * keyboard is always of the same height as the app's standard keyboard.
     *
     * @var boolean
     */
    public $resize_keyboard;

    /**
     * Optional. Requests clients to hide the keyboard as soon as it's been used.
     * The keyboard will still be available, but clients will automatically display the usual letter-keyboard in the
     * chat – the user can press a special button in the input field to see the custom keyboard again. Defaults to false.
     *
     * @var boolean
     */
    public $one_time_keyboard;

    /**
     * Optional. Use this parameter if you want to show the keyboard to specific users only. Targets: 1)
     * users that are @mentioned in the text of the Message object; 2) if the bot's message is a reply
     * (has reply_to_message_id), sender of the original message.
     *
     * @var boolean
     */
    public $selective;

}