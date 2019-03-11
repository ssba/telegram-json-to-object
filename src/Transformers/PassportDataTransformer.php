<?php

namespace ssba\TelegramJsonToObject\Transformers;

use ssba\TelegramJsonToObject\Types\EncryptedCredentials;
use ssba\TelegramJsonToObject\Types\EncryptedPassportElement;
use ssba\TelegramJsonToObject\Types\PassportData;
use ssba\TelegramJsonToObject\Bindings\ArrayBinding;
use ssba\TelegramJsonToObject\Bindings\FieldBinding;
use ssba\TelegramJsonToObject\ClassBindings;


class PassportDataTransformer implements Transformer
{

    public function register(ClassBindings $classBindings)
    {
        $classBindings->register(new ArrayBinding('message', 'message', EncryptedPassportElement::class));
        $classBindings->register(new FieldBinding('edited_message', 'edited_message', EncryptedCredentials::class));
    }

    public function transforms()
    {
        return PassportData::class;
    }

}