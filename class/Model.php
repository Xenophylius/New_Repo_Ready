<?php

class Model {


    // CONSTRUCT 
    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    // METHOD 
    public function hydrate(array $data){
        foreach ($data as $key => $value) {
            $this->superSetter($key, $value);
        }
    }


// GETTER
    public function superGetter(string $property)
    {
        return $this->$property;
    }


// SETTER 
    public function superSetter(string $property, mixed $value)
    { 
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }

        if ($property == 'password') {
            $this->setPassword($value);
        }
        
    }
}