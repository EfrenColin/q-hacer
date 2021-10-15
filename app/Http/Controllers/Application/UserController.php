<?php

namespace App\Http\Controllers\Application;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class UserController extends Controller
{

    public function profile(Request $request)
    {
        $user = [
            'bio'  => $request->user()->bio,
            'name'  => $request->user()->name,
            'email' => $request->user()->email,
            'gender' => $request->user()->gender ?? null,
            'country' => $request->user()->country ?? null
        ];

        return Inertia::render('User/Setting/Personal/Index',[
            'user' => $user,
            'countries' => config('countries'),
        ]);
    }

    public function updateProfile(Request $request)
    {
        $request->user()->update($request->only('bio','name','gender','country',''));

        return redirect()->back()->with('success','Datos actualizados correctamente');
    }

    public function account(Request $request)
    {
        $user = [
            'name'  => $request->user()->name,
            'email' => $request->user()->email,
        ];

        return Inertia::render('User/Setting/Account/Index',[
            'user' => $user,
            'countries' => config('countries'),
        ]);
    }
}
