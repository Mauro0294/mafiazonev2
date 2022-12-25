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
        switch ($crimeId) {
            case 1:
                $random = rand(1, 2);
                if ($random == 1) {
                    $money = rand(100, 500);
                } else {
                    return redirect('misdaad');
                }
                break;
            case 2:
                $random = rand(1, 3);
                if ($random == 1) {
                    $money = rand(500, 1000);
                } else {
                    return redirect('misdaad');
                }
                break;
            case 3:
                $random = rand(1, 4);
                if ($random == 1) {
                    $money = rand(2000, 5000);
                } else {
                    return redirect('misdaad');
                }
                break;
            default:
                $money = 0;
                break;
        }
        $user = auth()->user();
        $user->cash = $user->cash + $money;
        $user->save();
        return redirect('dashboard');
    }
}
