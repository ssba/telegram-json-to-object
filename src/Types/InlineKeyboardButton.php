<?php

namespace ssba\TelegramJsonToObject\Types;

use ssba\TelegramJsonToObject\Transformers\InlineQueryTransformer;


/**
 * Class InlineKeyboardButton.
 *
 * This object represents one button of an inline keyboard. You must use exactly one of the optional fields.
 *
 * @link https://core.telegram.org/bots/api#inlinekeyboardbutton
 *
 */
class InlineKeyboardButton extends BaseObject
{

    /**
     * Label text on the button
     *
     * @var string
     */
    public $text;

    /**
     * Optional. HTTP or tg:// url to be opened when button is pressed
     *
     * @var string
     */
    public $url;

    /**
     * Optional. Data to be sent in a callback query to the bot when button is pressed, 1-64 bytes
     *
     * @var string
     */
    public $callback_data;

    /**
     * Optional. If set, pressing the button will prompt the user to select one of their chats,
     * open that chat and insert the bot‘s username and the specified inline query in the input field.
     * Can be empty, in which case just the bot’s username will be inserted.
     *
     * @var string
     */
    public $switch_inline_query;

    /**
     * Optional. If set, pressing the button will insert the bot‘s username and the specified inline query
     * in the current chat's input field. Can be empty, in which case only the bot’s username will be inserted.
     *
     * @var string
     */
    public $switch_inline_query_current_chat;

    /**
     * Optional. Description of the game that will be launched when the user presses the button.
     *
     * @var CallbackGame ??
     */
    public $callback_game;

    /**
     * Optional. Specify True, to send a Pay button.
     * NOTE: This type of button must always be the first button in the first row.
     *
     * @var boolean
     */
    public $pay;

}