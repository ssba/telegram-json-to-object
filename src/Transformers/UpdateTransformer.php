<?php
/**
 * Created by PhpStorm.
 * User: sbudu
 * Date: 11/12/2018
 * Time: 5:52 AM
 */

namespace ssba\TelegramJsonToObject\Transformers;


use ssba\TelegramJsonToObject\Types\CallbackQuery;
use ssba\TelegramJsonToObject\Types\ChosenInlineResult;
use ssba\TelegramJsonToObject\Types\InlineQuery;
use ssba\TelegramJsonToObject\Types\Message;
use ssba\TelegramJsonToObject\Types\PreCheckoutQuery;
use ssba\TelegramJsonToObject\Types\ShippingQuery;
use ssba\TelegramJsonToObject\Types\Update;
use ssba\TelegramJsonToObject\Bindings\FieldBinding;
use ssba\TelegramJsonToObject\ClassBindings;


class UpdateTransformer implements Transformer
{

    public function register(ClassBindings $classBindings)
    {
        $classBindings->register(new FieldBinding('message', 'message', Message::class));
        $classBindings->register(new FieldBinding('edited_message', 'edited_message', Message::class));
        $classBindings->register(new FieldBinding('channel_post', 'channel_post', Message::class));
        $classBindings->register(new FieldBinding('edited_channel_post', 'edited_channel_post', Message::class));
        $classBindings->register(new FieldBinding('inline_query', 'inline_query', InlineQuery::class));
        $classBindings->register(new FieldBinding('chosen_inline_result', 'chosen_inline_result', ChosenInlineResult::class));
        $classBindings->register(new FieldBinding('callback_query', 'callback_query', CallbackQuery::class));
        $classBindings->register(new FieldBinding('shipping_query', 'shipping_query', ShippingQuery::class));
        $classBindings->register(new FieldBinding('pre_checkout_query', 'pre_checkout_query', PreCheckoutQuery::class));
    }

    public function transforms()
    {
        return Update::class;
    }

}