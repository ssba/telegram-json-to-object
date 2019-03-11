<?php

namespace ssba\TelegramJsonToObject\Types;

use ssba\TelegramJsonToObject\Transformers\UpdateTransformer;

/**
 * Class Update.
 *
 * This object represents an incoming update. At most one of the optional parameters can be present in any given update.
 *
 * @link https://core.telegram.org/bots/api#update
 *
 */
class Update extends BaseObject
{
    /**
     * @var string
     */
    public static $transformer = UpdateTransformer::class;

    /**
     * @var array
     */
    public static $types = [
        'message',
        'edited_message',
        'channel_post',
        'edited_channel_post',
        'inline_query',
        'chosen_inline_result',
        'callback_query',
        'shipping_query',
        'pre_checkout_query',
    ];

    /**
     * The update‘s unique identifier. Update identifiers start from a certain positive number and increase sequentially.
     * This ID becomes especially handy if you’re using Webhooks, since it allows you to ignore repeated updates or to restore the correct update sequence,
     * should they get out of order. If there are no new updates for at least a week, then identifier of the next update will be chosen randomly instead of sequentially.
     *
     * @var integer
     */
    public $update_id;

    /**
     * Optional. New incoming message of any kind — text, photo, sticker, etc.
     *
     * @var Message
     */
    public $message;

    /**
     * Optional. New version of a message that is known to the bot and was edited
     *
     * @var Message
     */
    public $edited_message;

    /**
     * Optional. New incoming channel post of any kind — text, photo, sticker, etc.
     *
     * @var Message
     */
    public $channel_post;

    /**
     * Optional. New version of a channel post that is known to the bot and was edited
     *
     * @var Message
     */
    public $edited_channel_post;

    /**
     * Optional. New incoming inline query
     *
     * @var InlineQuery
     */
    public $inline_query;

    /**
     * Optional. The result of an inline query that was chosen by a user and sent to their chat partner.
     * Please see our documentation on the feedback collecting for details on how to enable these updates for your bot.
     *
     * @var ChosenInlineResult
     */
    public $chosen_inline_result;

    /**
     * Optional. New incoming callback query
     *
     * @var CallbackQuery
     */
    public $callback_query;

    /**
     * Optional. New incoming shipping query. Only for invoices with flexible price
     *
     * @var ShippingQuery
     */
    public $shipping_query;

    /**
     * Optional. New incoming pre-checkout query. Contains full information about checkout
     *
     * @var PreCheckoutQuery
     */
    public $pre_checkout_query;
}
