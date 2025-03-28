<?php

if (! function_exists('translate')) {
    /**
     * ترجمه بر اساس زبان و مسیر سفارشی
     *
     * @param  string  $key
     * @param  array   $replace
     * @param  string  $locale
     * @return string
     */
    function translate($key, $replace = [], $locale = null)
    {
        if(isset($_GET['lang'])){
            $lang = $_GET['lang'];
            if (in_array($lang, ['en', 'fa'])) { // زبان‌های مجاز
                App::setLocale($lang);
            }
        }
        
        // اگر زبان مشخص نشده بود، از زبان پیش‌فرض استفاده می‌کنه
        $locale = $locale ?? app()->getLocale();
        $keys = explode('.',$key);
        if(count($keys) > 0){
            $filePath = resource_path("lang/{$locale}/".$keys[0].".php");
         
            if (file_exists($filePath)) {
                $translations = require $filePath;
                return $translations[$keys[1]] ?? $keys[1];
            }
        }else{
            return $translations[$keys] ?? $keys;
        }
        // بارگذاری فایل زبان از مسیر جدید

        return $key; // در صورت نبود ترجمه، کلید رو برمی‌گردونه
    }
}
