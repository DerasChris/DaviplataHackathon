<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\CustomUser;

class DaviuniAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('custom_login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'carnet' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('carnet', 'password');

        if (Auth::guard('custom')->attempt(['carnet' => $credentials['carnet'], 'password' => $credentials['password']])) {
            return redirect()->intended('/custom-dashboard');
        } else {
            return back()->withErrors(['carnet' => 'Las credenciales no coinciden con nuestros registros.']);
        }
    }

    public function logout()
    {
        Auth::guard('custom')->logout();
        return redirect('/custom-login');
    }
}
