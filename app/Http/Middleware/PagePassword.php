<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PagePassword
{
    public function handle(Request $request, Closure $next)
    {
        // Jika sudah ada session 'page_unlocked', lanjut
        if ($request->session()->get('page_unlocked')) {
            return $next($request);
        }

        // Jika POST password benar, simpan ke session
        if ($request->isMethod('post') && $request->input('password') === 'rahasia123') {
            $request->session()->put('page_unlocked', true);
            return redirect('#'); // redirect langsung ke content
        }


        // Kalau belum isi password → tampilkan form
        return response()->view('locked');
    }
}
