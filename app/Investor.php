<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investor extends Model{

    protected $fillable = [
        'id','user_id','name','address','phone','investment'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
