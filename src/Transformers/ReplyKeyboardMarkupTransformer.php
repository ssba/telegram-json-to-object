<?php
namespace ssba\TelegramJsonToObject\Transformers;

use ssba\TelegramJsonToObject\Types\KeyboardButton;
use ssba\TelegramJsonToObject\Types\ReplyKeyboardMarkup;
use ssba\TelegramJsonToObject\Bindings\ArrayOfArrayBinding;
use ssba\TelegramJsonToObject\ClassBindings;


class ReplyKeyboardMarkupTransformer implements Transformer
{

    public function register(ClassBindings $classBindings)
    {
        $classBindings->register(new ArrayOfArrayBinding('location', 'location', KeyboardButton::class));
    }

    public function transforms()
    {
        return ReplyKeyboardMarkup::class;
    }

}