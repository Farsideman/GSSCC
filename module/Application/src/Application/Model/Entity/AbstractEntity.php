<?php

namespace Application\Model\Entity;

abstract class AbstractEntity
{

    public function getArrayCopy()
    {
        return get_object_vars($this);
    }

    public function exchangeArray(array $options)
    {
        $methods = get_class_methods($this);
        foreach ($options as $key => $value) {
            if (in_array($method, $methods)) {
                $this->$method($value);
            }
        }

        return $this;
    }

    private function getSetterMethod($propertyName)
    {
        return "set" . str_replace(' ', '', ucwords(str_replace('_', ' ', $propertyName)));
    }
}