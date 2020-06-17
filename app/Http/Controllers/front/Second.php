<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class Second extends Controller
{
//    public function __construct() {
//        $this->middleware('auth')->except('showText1');
//    }

    public function showText () {
        return 'thaerr';
    }
    public function showText1 () {
        return 'thaerr';
    }
}
