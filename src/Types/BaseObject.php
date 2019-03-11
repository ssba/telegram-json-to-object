<?php

namespace ssba\TelegramJsonToObject\Types;

use JsonSerializable;

abstract class BaseObject implements JsonSerializable
{
    public static $transformer;

    public static $types;

    public static function getTransformer(){
        return static::$transformer ?? null;
    }

    public function getType(){

        if(!is_array(static::$types))
            return null;

        $properties = array_keys(array_filter(get_object_vars($this)));
        $intersect = array_intersect( $properties, static::$types );
        return array_pop($intersect);
    }

    public function jsonSerialize (){
        $vars = get_object_vars($this);
        $cleared = array_filter($vars);
        return $cleared;
    }

}