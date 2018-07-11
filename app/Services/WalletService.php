<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 11.07.18
 * Time: 1:30
 */

namespace App\Services;


use App\Entity\Currency;
use App\Entity\Money;
use App\Entity\User;
use App\Entity\Wallet;
use App\Requests\CreateWalletRequest;
use Illuminate\Support\Collection;

class WalletService implements WalletServiceInterface
{

    public function findByUser(int $userId): ?Wallet
    {
//        return Wallet::where('user_id', $userId)->get();
        $user = User::find($userId);
        if($user != null) {
            return $user->wallet;
        }
        return null;

    }

    public function create(CreateWalletRequest $request): Wallet
    {
        $user = User::find($request->getUserId());
        if($user != null) {
            $wallet = $user->wallet;
            if($wallet == null) {
                $wallet = new Wallet();
                $wallet->user_id = $request->getUserId();
                $wallet->save();
                return $wallet;
            }
        }
        throw new \LogicException('Duplicate wallet');

    }

    public function findCurrencies(int $walletId): Collection
    {
        return Currency::join('money', 'money.currency_id', '=', 'currency.id')->where('money.wallet_id', '=', $walletId)->get(['currency.*']);
    }
}