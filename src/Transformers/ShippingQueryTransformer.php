<?php
namespace ssba\TelegramJsonToObject\Transformers;

use ssba\TelegramJsonToObject\Types\ShippingAddress;
use ssba\TelegramJsonToObject\Types\ShippingQuery;
use ssba\TelegramJsonToObject\Types\User;
use ssba\TelegramJsonToObject\Bindings\FieldBinding;
use ssba\TelegramJsonToObject\ClassBindings;


class ShippingQueryTransformer implements Transformer
{

    public function register(ClassBindings $classBindings)
    {
        $classBindings->register(new FieldBinding('from', 'from', User::class));
        $classBindings->register(new FieldBinding('shipping_address', 'shipping_address', 	ShippingAddress::class));
    }

    /**
     * @return string
     */
    public function transforms()
    {
        return ShippingQuery::class;
    }

}