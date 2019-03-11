<?php
namespace ssba\TelegramJsonToObject;

use \ssba\TelegramJsonToObject\Types\Update;
use \ssba\TelegramJsonToObject\Decoder;

class TelegramJsonToObject
{

    public static function resolve(string $json){

        $jsonDecoder = new Decoder();

        return $jsonDecoder->decode($json, Update::class);
    }
}