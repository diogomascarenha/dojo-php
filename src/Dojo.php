<?php

Class Dojo {
    public $name;

    public function __construct($name)
    {
      $this->name = $name;
    }

    public function getRandomNumber()
    {
      return rand(1,99);
    }

    public function setName($value)
    {
        $this->name = $value;
        return $this;
    }

    public function getName()
    {
      return $this->name;
    }
}
