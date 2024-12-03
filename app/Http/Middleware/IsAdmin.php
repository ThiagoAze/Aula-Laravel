<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

// Verifica se o usuário está autenticado e se possui o campois_admin como true
class IsAdmin
{
    public function handle($request, Closure $next)
    {
        if(Auth::check() && Auth::user()->is_admin){
            return $next($request);
        }
        return redirect('/');
    }
}
