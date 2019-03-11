<?php

namespace ssba\TelegramJsonToObject\Bindings;

use ssba\TelegramJsonToObject\Decoder;

class RawBinding implements Binding
{
    /**
     * @var string
     */
    private $property;

    /**
     * RawBinding constructor.
     *
     * @param string $property
     */
    public function __construct($property)
    {
        $this->property = $property;
    }

    /**
     * executes the defined binding method on the class instance.
     *
     * @param Decoder     $jsonDecoder
     * @param mixed       $jsonData
     * @param mixed       $propertyAccessor the class instance to bind to
     *
     * @return mixed
     */
    public function bind($jsonDecoder, $jsonData, $propertyAccessor)
    {
        if (array_key_exists($this->property, $jsonData)) {
            $propertyAccessor->set($jsonData[$this->property]);
        }
    }

    /**
     * @return string the name of the property to bind
     */
    public function property()
    {
        return $this->property;
    }
}
