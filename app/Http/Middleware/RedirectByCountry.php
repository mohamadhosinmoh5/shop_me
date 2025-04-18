<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use Illuminate\Support\Facades\App;
class RedirectByCountry
{
    public function handle(Request $request, Closure $next)
    {
        // گرفتن IP کاربر
        $ip = $request->ip(); // یا برای تست دستی: '5.126.51.212'
        $position = Location::get($ip);

        // اگر موقعیت پیدا شد و کشور ایران بود
        if ($position && $position->countryCode === 'IR') {
            App::setLocale('fa');
        } else {
            App::setLocale('en');
        }

        // اگر هیچکدوم از شرایط انجام نشد، درخواست ادامه پیدا میکنه
        return $next($request);
    }
}
