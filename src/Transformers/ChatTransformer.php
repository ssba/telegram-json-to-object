<?php
namespace ssba\TelegramJsonToObject\Transformers;

use ssba\TelegramJsonToObject\Types\Chat;
use ssba\TelegramJsonToObject\Types\ChatPhoto;
use ssba\TelegramJsonToObject\Types\Message;
use ssba\TelegramJsonToObject\Bindings\FieldBinding;
use ssba\TelegramJsonToObject\ClassBindings;


class ChatTransformer implements Transformer
{

    public function register(ClassBindings $classBindings)
    {
        $classBindings->register(new FieldBinding('photo', 'photo', ChatPhoto::class));
        $classBindings->register(new FieldBinding('pinned_message', 'pinned_message', Message::class));
    }

    public function transforms()
    {
        return Chat::class;
    }

}