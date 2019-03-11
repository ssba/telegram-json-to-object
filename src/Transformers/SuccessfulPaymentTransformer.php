<?php
namespace ssba\TelegramJsonToObject\Transformers;

use ssba\TelegramJsonToObject\Types\OrderInfo;
use ssba\TelegramJsonToObject\Types\SuccessfulPayment;
use ssba\TelegramJsonToObject\Bindings\FieldBinding;
use ssba\TelegramJsonToObject\ClassBindings;


class SuccessfulPaymentTransformer implements Transformer
{

    public function register(ClassBindings $classBindings)
    {
        $classBindings->register(new FieldBinding('order_info', 'order_info', OrderInfo::class));
    }

    public function transforms()
    {
        return SuccessfulPayment::class;
    }

}