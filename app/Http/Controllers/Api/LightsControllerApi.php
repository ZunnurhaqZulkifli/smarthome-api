<?php

namespace App\Http\Controllers\Api;

use App\Models\Light;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class LightsControllerApi extends BaseApiController
{
    public function checkStatus(Request $request)
    {
        $light = Light::orderBy('id', 'desc')->first();
        $status = $light->status;

        return $this->set_success([
            'status' => $status
        ]);
    }

    public function turnOn(Request $request)
    {
        Light::create([
            'status' => 'on'
        ]);

        $message = Artisan::call('app:light on');

        return $this->set_success([
            'status' => 'on',
        ]);
    }

    public function turnOff(Request $request)
    {
        Light::create([
            'status' => 'off'
        ]);

        Artisan::call('app:light off');

        return $this->set_success([
            'status' => 'off',
        ]);
    }
}
