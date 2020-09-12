<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    protected $fillable = ['user_id', 'punchIn', 'punchOut'];

    
    // リレーション
    public function user()
    {
        $this->belongsTo('App\User');
    }
}
