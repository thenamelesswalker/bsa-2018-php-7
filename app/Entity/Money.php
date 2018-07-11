<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Money extends Model
{
    use SoftDeletes;

    protected $table = "money";

    protected $dates = ['deleted_at'];

    public function currency() {
        return $this->belongsTo(Currency::class);
    }

    public function wallet() {
        return $this->belongsTo(Wallet::class);
    }
}
