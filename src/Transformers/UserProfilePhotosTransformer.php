<?php
namespace ssba\TelegramJsonToObject\Transformers;

use ssba\TelegramJsonToObject\Types\UserProfilePhotos;
use ssba\TelegramJsonToObject\Bindings\ArrayOfArrayBinding;
use ssba\TelegramJsonToObject\ClassBindings;


class UserProfilePhotosTransformer implements Transformer
{

    public function register(ClassBindings $classBindings)
    {
        $classBindings->register(new ArrayOfArrayBinding('photos', 'photos', PhotoSize::class));
    }

    public function transforms()
    {
        return UserProfilePhotos::class;
    }

}