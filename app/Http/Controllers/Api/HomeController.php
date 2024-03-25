<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Api\BaseController;

class HomeController extends BaseController
{
  public function __invoke()
  {
    $data = [
      'app' => config('app'),
      'db.host' => config('database.host')
    ];
    $message = "Bienvendio al Api Home";
  
    return $this->sendResponse($data, $message, 200);
  }
}