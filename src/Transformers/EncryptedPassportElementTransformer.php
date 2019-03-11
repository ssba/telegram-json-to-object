<?php

namespace ssba\TelegramJsonToObject\Transformers;

use ssba\TelegramJsonToObject\Types\EncryptedPassportElement;
use ssba\TelegramJsonToObject\Types\PassportFile;
use ssba\TelegramJsonToObject\Bindings\ArrayBinding;
use ssba\TelegramJsonToObject\Bindings\FieldBinding;
use ssba\TelegramJsonToObject\ClassBindings;


class EncryptedPassportElementTransformer implements Transformer
{

    public function register(ClassBindings $classBindings)
    {
        $classBindings->register(new ArrayBinding('files', 'files', PassportFile::class));
        $classBindings->register(new FieldBinding('front_side', 'front_side', PassportFile::class));
        $classBindings->register(new FieldBinding('reverse_side', 'reverse_side', PassportFile::class));
        $classBindings->register(new FieldBinding('selfie', 'selfie', PassportFile::class));
        $classBindings->register(new ArrayBinding('translation', 'translation', PassportFile::class));
    }

    public function transforms()
    {
        return EncryptedPassportElement::class;
    }

}