<?php
namespace ssba\TelegramJsonToObject\Transformers;

use ssba\TelegramJsonToObject\Types\Animation;
use ssba\TelegramJsonToObject\Types\Game;
use ssba\TelegramJsonToObject\Types\MessageEntity;
use ssba\TelegramJsonToObject\Types\PhotoSize;
use ssba\TelegramJsonToObject\Bindings\ArrayBinding;
use ssba\TelegramJsonToObject\Bindings\FieldBinding;
use ssba\TelegramJsonToObject\ClassBindings;


class GameTransformer implements Transformer
{

    public function register(ClassBindings $classBindings)
    {
        $classBindings->register(new ArrayBinding('photo', 'photo', PhotoSize::class));
        $classBindings->register(new ArrayBinding('text_entities', 'text_entities', MessageEntity::class));
        $classBindings->register(new FieldBinding('animation', 'animation', Animation::class));
    }

    public function transforms()
    {
        return Game::class;
    }

}