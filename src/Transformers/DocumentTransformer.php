<?php
namespace ssba\TelegramJsonToObject\Transformers;

use ssba\TelegramJsonToObject\Types\Document;
use ssba\TelegramJsonToObject\Types\PhotoSize;
use ssba\TelegramJsonToObject\Bindings\FieldBinding;
use ssba\TelegramJsonToObject\ClassBindings;


class DocumentTransformer implements Transformer
{

    public function register(ClassBindings $classBindings)
    {
        $classBindings->register(new FieldBinding('thumb', 'thumb', PhotoSize::class));
    }

    public function transforms()
    {
        return Document::class;
    }

}