<?php

namespace App\Controllers;

use App\Models\ProductoModel;

class Home extends BaseController
{
    public function index(): string
    {
        $productos = new ProductoModel();
        $data['productos'] = $productos->getProductos();
        return view('welcome_message', $data);
    }
}
