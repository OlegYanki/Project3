<?php

namespace App\Http\Controllers\Content;

use App\Http\Controllers\Controller;

class MainController extends Controller {
  public function __construct() {}

  public function mainPage() {
      return view('app');
  }
  public function contentToken() {
      return view('content_token');
  }

  public function rest() {
      return view('rest');
  }
  public function showInfoApiClient() {
      return view('api_client');
  }
  public function contentClient(){
  	return view('content-register-client');
  }
}
