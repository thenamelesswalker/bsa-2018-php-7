<?php

namespace App\Requests;

class CreateCurrencyRequest
{
    private $name;

    /**
     * CreateCurrencyRequest constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }


    public function getName(): string
    {
        return $this->name;
    }
}