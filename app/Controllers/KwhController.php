<?php

namespace App\Controllers;

class KwhController extends BaseController
{

    function __construct()
    {
        $this->model = new \App\Models\Kwh_Model();
    }
    public function index()
    {

        
        return view('Kwh');
    }
}