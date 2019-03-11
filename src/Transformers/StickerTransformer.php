<?php
namespace ssba\TelegramJsonToObject\Transformers;

use ssba\TelegramJsonToObject\Types\MaskPosition;
use ssba\TelegramJsonToObject\Types\PhotoSize;
use ssba\TelegramJsonToObject\Types\Sticker;
use ssba\TelegramJsonToObject\Bindings\FieldBinding;
use ssba\TelegramJsonToObject\ClassBindings;


class StickerTransformer implements Transformer
{

    public function register(ClassBindings $classBindings)
    {
        $classBindings->register(new FieldBinding('thumb', 'thumb', PhotoSize::class));
        $classBindings->register(new FieldBinding('mask_position', 'mask_position', MaskPosition::class));
    }

    public function transforms()
    {
        return Sticker::class;
    }

}