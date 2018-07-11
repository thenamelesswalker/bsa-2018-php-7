<?php
/**
 * Created by PhpStorm.
 * User: work
 * Date: 11.07.18
 * Time: 1:04
 */

namespace App\Services;


use App\Entity\User;
use App\Entity\Wallet;
use App\Requests\SaveUserRequest;
use Illuminate\Support\Collection;

class UserService implements UserServiceInterface
{

    public function findAll(): Collection
    {
        return User::all();
    }

    public function findById(int $id): ?User
    {
        return User::find($id);
    }

    public function create(SaveUserRequest $request): User
    {
        $user = new User();
        $user->name = $request->getName();
        $user->email = $request->getEmail();
        $user->save();
        return $user;
    }


    public function save(SaveUserRequest $request): User
    {
        if ($request->getId() == null) {
            return $this->create($request);
        }
        $user = User::find($request->getId());
        if($user == null) {
            return $this->create($request);
        }
        $user->name = $request->getName();
        $user->email = $request->getEmail();
        $user->update();
        return $user;
    }

    public function delete(int $id): void
    {
        $user = User::find($id);
        if($user != null) {
            $wallet = $user->wallet();
            if ($wallet != null) {
                $wallet->delete();
            }
            $user->delete();
        }
    }
}