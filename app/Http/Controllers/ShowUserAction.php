<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ShowUserAction extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\User $user
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke(Request $request, User $user)
    {
        return view('user.show', [
            'user' => $user,
        ]);
    }
}
