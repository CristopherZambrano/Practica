<?php

namespace App\Controllers;

use App\Models\ProductoModel;

class ProductosController extends BaseController
{
    public function index()
    {
        $productos = new ProductoModel();
        $data['productos'] = $productos->getProductos();

        return view('productos', $data);
    }
}