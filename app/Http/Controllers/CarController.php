<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\JwtAuth;

class CarController extends Controller
{
    public function index(Request $request){
      $hash= $request->header('Authorization',null);
      $JwtAuth = new JwtAuth();
      $checkToken = $JwtAuth->checkToken($hash);

      if($checkToken){
        echo "Index de CarController Autenticado";die();
      }else{
        echo "No autenticado";die();
      }

    }
}
