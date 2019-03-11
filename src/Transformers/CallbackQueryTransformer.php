<?php
namespace ssba\TelegramJsonToObject\Transformers;

use ssba\TelegramJsonToObject\Types\CallbackQuery;
use ssba\TelegramJsonToObject\Types\Message;
use ssba\TelegramJsonToObject\Types\User;
use ssba\TelegramJsonToObject\Bindings\FieldBinding;
use ssba\TelegramJsonToObject\ClassBindings;


class CallbackQueryTransformer implements Transformer
{

    public function register(ClassBindings $classBindings)
    {
        $classBindings->register(new FieldBinding('from', 'from', User::class));
        $classBindings->register(new FieldBinding('message', 'message', Message::class));
    }

    public function transforms()
    {
        return CallbackQuery::class;
    }

}