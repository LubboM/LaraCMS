<?php

namespace App\Models\Player;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{

    protected $table = 'users_currency';
    public $timestamps = false;

    protected $fillable = ['type','amount'];

    public function user() {
        return $this->belongsTo(User::class);
    }

}
