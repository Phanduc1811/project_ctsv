<?php

namespace App\Controllers\client;
use App\Controllers\BaseController;

class home extends BaseController
{
    public function index()
    {
        $data=[];
        $data=$this->loadLayout($data, 'client/share/header', 'client/share/footer');
        return view('Views/client/index', $data);
    }
}
