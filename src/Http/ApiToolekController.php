<?php


namespace Toolek\Message\Http;


use App\Http\Controllers\Controller;

class ApiToolekController extends Controller
{

    public function index(){
        $config = $value = config('apitoolek.text');
        return "this is test : $config";
    }

}
