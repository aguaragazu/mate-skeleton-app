<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class BaseController extends Controller 
{

  /**
   * Send Response 
   *
   * @param array  $result
   * @param string  $message
   * @param integer $code
   *
   * @return \Mate\Http\Response
   */
  public function sendResponse($result, $message, $code = 200)  
  {
    $response = [
      'coede' => $code,
      'succes' => true,
      'data' => $result,
      'message' => $message
    ];

    return json($response);
  }

  /**
   * Undocumented function
   *
   * @param string  $error
   * @param array   $errorMessages
   * @param integer $code
   *
   * @return \Mate\Http\Response
   */
  public function sendError($error, $errorMessages = [], $code = 404)
  {
    $response = [
      'coede' => $code,
      'success' => false,
      'message' => $error,
    ];

    if(!empty($errorMessages)){
        $response['data'] = $errorMessages;
    }

    return json($response);
  }
}