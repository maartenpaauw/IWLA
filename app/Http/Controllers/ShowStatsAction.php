<?php

namespace App\Http\Controllers;

use App\User;

class ShowStatsAction extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke()
    {
        return view('stats.index', [
            'users' => User::all(),
        ]);
    }
}
