<?php

namespace App\Requests;

class SaveUserRequest
{
    private $id;
    private $name;
    private $email;

    /**
     * SaveUserRequest constructor.
     * @param $id
     * @param $name
     * @param $email
     */
    public function __construct($id, $name, $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}
