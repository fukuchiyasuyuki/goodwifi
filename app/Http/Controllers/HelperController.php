<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelperController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('home', [
            'intent' => $user->createSetupIntent()
        ]);
    }
}
