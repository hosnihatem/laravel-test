<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ConfirmsPasswords;

class UserController extends Controller {
    public function showAdminName () {
        return 'thaer';
    }
    public function getIndex () {
//        first method
//        $data = [];
//        $data['id'] = 22;
//        $data['name'] = 'thaer';
//        return view('welcome', $data);

//        the best method
//        $obj = new \stdClass();
//        $obj->name = 'thaere';
//        $obj->age = 22;
//        return view('welcome', compact('obj'));

//        send string
//        return view('welcome') -> with('name','thaer');
//
//        send array

        $names = ['a' => 'thaer', 'b' => 'ahmed'];
//        first method
        return view('welcome') -> with('names',$names);
//        second method
        return view('welcome', compact('names'));

    }
}
