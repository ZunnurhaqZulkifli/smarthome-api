<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class LightsControllerApi extends BaseApiController
{
    public static function checkStatus(Request $request)
    {
        $e = Artisan::call('app:light on');
        return $e;
    }

    public static function turnOn(Request $request)
    {
        return self::success([
            'status' => 'on'
        ]);
    }

    public static function turnOff(Request $request)
    {
        return self::success([
            'status' => 'on'
        ]);
    }
}
