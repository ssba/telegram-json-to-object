<?php
namespace ssba\TelegramJsonToObject\Transformers;

use ssba\TelegramJsonToObject\Types\MessageEntity;

use ssba\TelegramJsonToObject\Types\User;
use ssba\TelegramJsonToObject\Bindings\FieldBinding;
use ssba\TelegramJsonToObject\ClassBindings;


class MessageEntityTransformer implements Transformer
{

    public function register(ClassBindings $classBindings)
    {
        $classBindings->register(new FieldBinding('user', 'user', User::class));
    }

    public function transforms()
    {
        return MessageEntity::class;
    }

}