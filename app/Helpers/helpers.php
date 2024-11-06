<?php

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;
if (!function_exists('get_setting')) {
    /**
     * Retrieve a setting value by key.
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    // function get_setting($key, $default = null)
    // {
    //     $cacheKey = 'settings_' . $key;

    //     return Cache::remember($cacheKey, 60 * 60, function () use ($key, $default) {
    //         $setting = Setting::where('key', $key)->first();
    //         return $setting ? $setting->value : $default;
    //     });
    // }

    function get_setting($key, $default = null)
    {
        $setting = Setting::where('key', $key)->first();

        return $setting ? $setting->value : $default;
    }


    // In a suitable location (e.g., app/Helpers/DurationHelper.php)
    if (!function_exists('formatDuration')) {
        function formatDuration($minutes) {
            $hours = floor($minutes / 60);
            $remainingMinutes = $minutes % 60;

            $result = '';
            if ($hours > 0) {
                $result .= $hours . 'hr ';
            }
            if ($remainingMinutes > 0 || $hours === 0) {
                $result .= $remainingMinutes . 'min';
            }

            return trim($result);
        }
    }

}
