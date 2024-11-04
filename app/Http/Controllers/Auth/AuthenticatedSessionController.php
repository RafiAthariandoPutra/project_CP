<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return $this->redirectToBasedOnRole($request);
    }

    protected function redirectToBasedOnRole (LoginRequest $request)
    {
        $user = Auth::user();

        switch ($user->role) {
            case 'socialAdmin':
                return redirect()->route('dashboard.faq.index');
            case 'projectAdmin':
                return redirect()->route('dashboard.project.index');
            case 'superAdmin':
                return redirect()->route('dashboard.trustedcompany.index');
            default:
                return redirect()->route('home');
        }
    }

    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
