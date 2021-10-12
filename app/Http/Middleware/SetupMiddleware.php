<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SetupMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->user()->ownedWorkspaces()->exists()){
            $name = explode(' ',$request->user()->name, 2)[0]." Espacio Personal";

            return Inertia::render('User/Workspace/CreateFirstWorkspace',[
                'name' => $name
            ]);
        }

        return $next($request);
    }
}
