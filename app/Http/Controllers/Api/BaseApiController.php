<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class BaseApiController extends Controller
{
    public static function success($data = [], $message = 'success', $code = 200)
    {
        return Response::json([
            'status' => $code,
            'message' => $message,
            'data'    => $data,
        ], $code);
    }

    public static function set_success($data = [], $message = [], $code = 200)
    {
        return Response::json([
            'status' => $code,
            'message' => $message,
            'data'    => $data,
        ], $code);
    }

    // Specific Error
    public function set_error($data = [], $errors = [], $message, $code)
    {
        return Response::json([
            'status' => $code,
            'message' => $message,  // User Password or Usermane is incorrect. (user see)
            'errors'  => $errors, // Bad Credentials. (system user see)
            'data' => $data,
        ], $code); // $code = status response code.
    }

    public function error($errors = [], $message = 'Error', $code = 400)
    {
        return Response::json([
            'message' => $message,
            'errors'  => $errors,
        ], $code);
    }
}
