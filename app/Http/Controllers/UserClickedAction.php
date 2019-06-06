<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserClickedAction extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\User $user
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function __invoke(Request $request, User $user)
    {
        $lastClick = $user->clicks()->get()->last();

        if (empty($lastClick)) {
            $lastClick = Carbon::now()->subHours(3);
        } else {
            $lastClick = $lastClick->clicked_at;
        }


        $twoHoursAgo = Carbon::now()->subHours(2);

        if ($twoHoursAgo >= $lastClick) {
            $user->clicks()->create([
                'clicked_at' => Carbon::now(),
            ]);
        }

        return $user->clicks()->get();
    }
}
