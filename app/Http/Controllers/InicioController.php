<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Productos;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index()
    {
        $data['titulo'] = 'Tienda BioFemme - La belleza está en ti';
        $data['title'] = true;
        $data['imgCategorias'] = Menu::getImagenes(3);
        $data["productos"] = Productos::getProductos();
        $data['categorias'] = true;
        $data['productos_'] = true;
        $data['banner1'] = true;
        $data['banner2'] = true;
        $data['slider'] = true;
        $data['footer'] = true;

        return view('layouts.view_childs', $data);
    }
}
