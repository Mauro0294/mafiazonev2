<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Timer;

class CrimeController extends Controller
{
    public function misdaad()
    {
        return view('crime.misdaad');
    }
    public function misdaadRequest(Request $request, $crimeId)
    {
        $timer = Timer::where('user_id', auth()->user()->id)->where('type', 'misdaad')->first();
        if ($timer) {
            if ($timer->time > time()) {
                return redirect('dashboard');
            } else {
                $timer->delete();
            }
        }
        $random = rand(1, $crimeId + 1);
        if ($random == 1) {
            $money = rand(250 * $crimeId, 500 * $crimeId);
        } else {
            return redirect('misdaad');
        }

        $user = auth()->user();
        $user->cash = $user->cash + $money;
        $user->save();

        $timer = new Timer();
        $timer->user_id = $user->id;
        $timer->type = 'misdaad';
        $timer->time = time() + 90;
        $timer->save();

        return redirect('dashboard');
    }
}
