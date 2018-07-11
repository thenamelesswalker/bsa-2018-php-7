<?php

namespace App\Requests;

class CreateMoneyRequest
{
    private $currencyId;
    private $walletId;
    private $amount;

    /**
     * CreateMoneyRequest constructor.
     * @param $currencyId
     * @param $walletId
     * @param $amount
     */
    public function __construct($currencyId, $walletId, $amount)
    {
        $this->currencyId = $currencyId;
        $this->walletId = $walletId;
        $this->amount = $amount;
    }

    public function getCurrencyId(): int
    {
        return $this->currencyId;
    }

    public function getWalletId(): int
    {
        return $this->walletId;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }
}