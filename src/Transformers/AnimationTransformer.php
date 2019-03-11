<?php
namespace ssba\TelegramJsonToObject\Transformers;

use ssba\TelegramJsonToObject\Bindings\FieldBinding;
use ssba\TelegramJsonToObject\ClassBindings;
use ssba\TelegramJsonToObject\Types\Animation;
use ssba\TelegramJsonToObject\Types\PhotoSize;

class AnimationTransformer implements Transformer
{

    public function register(ClassBindings $classBindings)
    {
        $classBindings->register(new FieldBinding('thumb', 'thumb', PhotoSize::class));
    }

    public function transforms()
    {
        return Animation::class;
    }

}