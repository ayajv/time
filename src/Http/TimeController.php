<?php

namespace Ayajv\Time\Http;

use Carbon\Carbon;
use App\Http\Controllers\Controller;

class TimeController extends Controller
{
    public function index($time = null)
    {
        $time = Carbon::now($time)->toDateTimeString();
        return view('vjtime::time')->with("time",$time);
    }
}