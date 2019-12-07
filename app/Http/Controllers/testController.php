<?php

namespace App\Http\Controllers;

class testController extends Controller {

public function index(){

    $tab=[1,2,3];
    $tab_json=json_encode($tab);

    return $tab_json;
}
}