<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UserController extends Controller
{

    public function profile(Request $request)
    {
        $countries = config('countries');

        $user = [
            'bio'  => $request->user()->bio,
            'name'  => $request->user()->name,
            'email' => $request->user()->email,
            'gender' => $request->user()->gender,
            'country' => $request->user()->country ?? null,
        ];

        return Inertia::render('User/Setting/Personal/Index',[
            'user' => $user,
            'countries' => $countries,
        ]);
    }

    public function account(Request $request)
    {
        $user = [
            'name'  => $request->user()->name,
            'email' => $request->user()->email,
        ];

        return Inertia::render('User/Setting/Account/Index',[
            'user' => $user
        ]);
    }
}
