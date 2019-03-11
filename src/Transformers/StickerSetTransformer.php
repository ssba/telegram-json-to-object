<?php
namespace ssba\TelegramJsonToObject\Transformers;

use ssba\TelegramJsonToObject\Types\Sticker;
use ssba\TelegramJsonToObject\Types\StickerSet;
use ssba\TelegramJsonToObject\Bindings\ArrayBinding;
use ssba\TelegramJsonToObject\ClassBindings;


class StickerSetTransformer implements Transformer
{

    public function register(ClassBindings $classBindings)
    {
        $classBindings->register(new ArrayBinding('stickers', 'stickers', Sticker::class));
    }

    public function transforms()
    {
        return StickerSet::class;
    }

}