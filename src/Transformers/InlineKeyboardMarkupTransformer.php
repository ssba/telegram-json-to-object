<?php
namespace ssba\TelegramJsonToObject\Transformers;

use ssba\TelegramJsonToObject\Types\InlineKeyboardButton;
use ssba\TelegramJsonToObject\Types\InlineKeyboardMarkup;
use ssba\TelegramJsonToObject\Bindings\ArrayOfArrayBinding;

use ssba\TelegramJsonToObject\ClassBindings;


class InlineKeyboardMarkupTransformer implements Transformer
{

    public function register(ClassBindings $classBindings)
    {
        $classBindings->register(new ArrayOfArrayBinding('inline_keyboard', 'inline_keyboard', InlineKeyboardButton::class));
    }

    public function transforms()
    {
        return InlineKeyboardMarkup::class;
    }

}