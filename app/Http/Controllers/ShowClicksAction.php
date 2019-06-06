<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ShowClicksAction extends Controller
{
    public function __invoke(Request $request, User $user)
    {
        return JsonResponse::create([
            'clicks' => $user->clicks()->count(),
        ]);
    }
}
