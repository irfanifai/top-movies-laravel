<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class social_accounts extends Model
{
    protected $fillable = [
        'user_id',
        'provider',
        'provider_name'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
