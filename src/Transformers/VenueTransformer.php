<?php
namespace ssba\TelegramJsonToObject\Transformers;

use ssba\TelegramJsonToObject\Types\Location;
use ssba\TelegramJsonToObject\Types\Venue;
use ssba\TelegramJsonToObject\Bindings\FieldBinding;
use ssba\TelegramJsonToObject\ClassBindings;


class VenueTransformer implements Transformer
{

    public function register(ClassBindings $classBindings)
    {
        $classBindings->register(new FieldBinding('location', 'location', Location::class));
    }

    public function transforms()
    {
        return Venue::class;
    }

}