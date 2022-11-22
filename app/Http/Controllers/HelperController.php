<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelperController extends Controller
{
    public static function console_log($var) {
        echo '<script>console.log(', json_encode($var, JSON_UNESCAPED_UNICODE), ');</script>';
    }

    public function show() {
        $this->HelperController::console_log('log in action before calling view by Helper');
     
        return view('console_log_test');
    }
}
