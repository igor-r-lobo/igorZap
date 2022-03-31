<?php

namespace App\Http\Controllers\Zap;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function send(Request $request)
    {
        return "Ola, mundo!";
    }

}
