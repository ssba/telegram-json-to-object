<?php
namespace ssba\TelegramJsonToObject\Transformers;

use ssba\TelegramJsonToObject\Types\OrderInfo;
use ssba\TelegramJsonToObject\Types\ShippingAddress;
use ssba\TelegramJsonToObject\Bindings\FieldBinding;
use ssba\TelegramJsonToObject\ClassBindings;


class OrderInfoTransformer implements Transformer
{

    public function register(ClassBindings $classBindings)
    {
        $classBindings->register(new FieldBinding('shipping_address', 'shipping_address', ShippingAddress::class));
    }

    public function transforms()
    {
        return OrderInfo::class;
    }

}