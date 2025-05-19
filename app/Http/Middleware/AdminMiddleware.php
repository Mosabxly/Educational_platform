<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // تحقق أن المستخدم مسجل الدخول
        if (Auth::check() && Auth::user()->role === 'admin') {
            return $next($request);
        }

        // إذا لم يكن الأدمن، ارجع 403 أو حوله لصفحة أخرى
        abort(403, 'Unauthorized');
    }
}
