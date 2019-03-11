<?php
namespace ssba\TelegramJsonToObject\Transformers;

use ssba\TelegramJsonToObject\Types\PhotoSize;
use ssba\TelegramJsonToObject\Types\VideoNote;
use ssba\TelegramJsonToObject\Bindings\FieldBinding;
use ssba\TelegramJsonToObject\ClassBindings;


class VideoNoteTransformer implements Transformer
{

    public function register(ClassBindings $classBindings)
    {
        $classBindings->register(new FieldBinding('thumb', 'thumb', PhotoSize::class));
    }

    public function transforms()
    {
        return VideoNote::class;
    }

}