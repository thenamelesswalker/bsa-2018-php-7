<?php

namespace App\Requests;

class CreateWalletRequest
{
    private $userId;

    /**
     * CreateWalletRequest constructor.
     * @param $userId
     */
    public function __construct($userId)
    {
        $this->userId = $userId;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }
}

