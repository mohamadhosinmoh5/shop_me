<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        $lang = $request->query('lang', 'en'); // پیش‌فرض انگلیسی
        if (in_array($lang, ['en', 'fa'])) { // زبان‌های مجاز
            App::setLocale($lang);
        }
        return $next($request);
    }
}