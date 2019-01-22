<?php

namespace App\Lib;

use Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class Helper {

  public static function url($u = ''){
    $url = 'staff/';
    if (Auth::user()->role == 'pendeta') {
      $url = 'pendeta/';
    }
    return url($url.$u);
  }

  public static function type(){
    $type = 'staff';
    if (Auth::user()->role == 'pendeta') {
      $type = 'pendeta';
    }
    return $type;
  }
}
