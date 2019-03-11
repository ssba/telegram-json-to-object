<?php
/**
 * Created by PhpStorm.
 * User: sbudu
 * Date: 11/12/2018
 * Time: 5:52 AM
 */

namespace ssba\TelegramJsonToObject\Transformers;


use ssba\TelegramJsonToObject\Types\OrderInfo;
use ssba\TelegramJsonToObject\Types\PreCheckoutQuery;
use ssba\TelegramJsonToObject\Types\User;
use ssba\TelegramJsonToObject\Bindings\FieldBinding;
use ssba\TelegramJsonToObject\ClassBindings;


class PreCheckoutQueryTransformer implements Transformer
{

    public function register(ClassBindings $classBindings)
    {
        $classBindings->register(new FieldBinding('from', 'from', User::class));
        $classBindings->register(new FieldBinding('order_info', 'order_info', OrderInfo::class));
    }

    public function transforms()
    {
        return PreCheckoutQuery::class;
    }

}