<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 11.07.18
 * Time: 1:30
 */

namespace App\Services;


use App\Entity\Money;
use App\Requests\CreateMoneyRequest;

class MoneyService implements MoneyServiceInterface
{

    public function create(CreateMoneyRequest $request): Money
    {
        $money = new Money();
        $money->currency_id = $request->getCurrencyId();
        $money->amount = $request->getAmount();
        $money->wallet_id = $request->getWalletId();
        $money->save();
        return $money;
    }

    public function maxAmount(): float
    {
        return Money::all()->max('amount');
    }
}