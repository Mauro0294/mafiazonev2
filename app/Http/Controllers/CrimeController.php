<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrimeController extends Controller
{
    public function misdaad()
    {
        return view('crime.misdaad');
    }
    public function misdaadRequest(Request $request, $crimeId)
    {
        $random = rand(1, $crimeId + 1);
        if ($random == 1) {
            $money = rand(100 * $crimeId, 500 * $crimeId);
        } else {
            return redirect('misdaad');
        }

        $user = auth()->user();
        $user->cash = $user->cash + $money;
        $user->save();
        return redirect('dashboard');
    }
}
