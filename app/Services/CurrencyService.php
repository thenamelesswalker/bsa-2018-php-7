<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 11.07.18
 * Time: 0:39
 */

namespace App\Services;


use App\Entity\Currency;
use App\Requests\CreateCurrencyRequest;

class CurrencyService implements CurrencyServiceInterface
{

    public function create(CreateCurrencyRequest $request): Currency
    {
        $currency = new Currency();
        $currency->name = $request->getName();
        $currency->save();
        return $currency;
    }
}