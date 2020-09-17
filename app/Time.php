<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    protected $fillable = ['user_id','user_name', 'punchIn', 'punchOut','month','day','breakIn','breakOut','workTime'];

    
    // リレーション
    public function user()
    {
        $this->belongsTo('App\User');
    }

    //任意の月の勤怠をスコープ
    public function scopeGetMonthAttendance($query,$month) {
        return $query->where('month',$month);
    }

    //任意の月の勤怠をスコープ
    public function scopeGetDayAttendance($query,$day) {
        return $query->where('day',$day);
    }
}
