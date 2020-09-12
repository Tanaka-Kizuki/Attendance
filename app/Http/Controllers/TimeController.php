<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use App\User;
use App\Time;

class TimeController extends Controller
{
    public function index() {
        return view('time.index');
    }

    public function timein() {
        // **必要なルール**
        // ・同じ日に2回出勤が押せない(もし打刻されていたらhomeに戻る設定)
        // ・
        $user = Auth::user();
        $oldtimein = Time::where('user_id',$user->id)->latest()->first();//一番最新のレコードを取得
        if($oldtimein) {
            $oldTimePunchIn = new Carbon($oldtimein->punchIn);
            $oldDay = $oldTimePunchIn->startOfDay();//最後に登録したpunchInの時刻を00:00:00で代入
        }
        $today = Carbon::today();//当日の日時を00:00:00で代入

        if($oldDay == $today && empty($oldtimein->punchOut)) {
            return redirect()->back();
        }

        $time = Time::create([
            'user_id' => $user->id,
            'punchIn' => Carbon::now('Asia/Tokyo'),
        ]);
        
        return redirect()->back();
    }

    public function timeOut() {
        $user = Auth::user();
        $timestamp = Time::where('user_id',$user->id)->latest()->first();
        $timestamp->update([
            'punchOut' => Carbon::now('Asia/Tokyo'),
        ]);
        return redirect('/time');
    }
}
