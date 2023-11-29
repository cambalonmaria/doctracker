<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $select = UserRole::where('userid', Auth::id())->first();
                if (Auth::user() && isset($select->roleid)){    
                    if ($select->roleid ==0){
                        return redirect('/admin/dashboard');
                    }elseif($select->roleid ==1){
                        return redirect('/user/dashboard');
                    }
                }
            }
        }

        return $next($request);
    }
}