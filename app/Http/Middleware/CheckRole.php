<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$roles): Response
    {
        if (Auth::check() && in_array(Auth::user()->role, $roles)) {
            return $next($request);
        }

        if (Auth::check()) {
            switch (Auth::user()->role) {
                case 'socialAdmin':
                    return redirect()->route('dashboard.faq.index')->with('error', 'Akses ditolak.');
                case 'projectAdmin':
                    return redirect()->route('dashboard.project.index')->with('error', 'Akses ditolak.');
                case 'superAdmin':
                    return redirect()->route('dashboard')->with('error', 'Akses ditolak.');
                default:
                    Auth::logout();
                    return redirect('/')->with('error', 'Akses ditolak.');
            }
        }

        return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
    }
}
