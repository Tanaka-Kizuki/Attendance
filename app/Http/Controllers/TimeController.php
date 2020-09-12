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
        $user = Auth::user();
        $time = Time::create([
            'user_id' => $user->id,
            'punchIn' => Carbon::now('Asia/Tokyo'),
        ]);
        return redirect('/time');
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
