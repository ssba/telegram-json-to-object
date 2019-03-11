<?php
namespace ssba\TelegramJsonToObject\Transformers;

use ssba\TelegramJsonToObject\Types\ChosenInlineResult;
use ssba\TelegramJsonToObject\Types\Location;
use ssba\TelegramJsonToObject\Types\User;
use ssba\TelegramJsonToObject\Bindings\FieldBinding;
use ssba\TelegramJsonToObject\ClassBindings;


class ChosenInlineResultTransformer implements Transformer
{

    public function register(ClassBindings $classBindings)
    {
        $classBindings->register(new FieldBinding('from', 'from', User::class));
        $classBindings->register(new FieldBinding('location', 'location', Location::class));
    }

    public function transforms()
    {
        return ChosenInlineResult::class;
    }

}