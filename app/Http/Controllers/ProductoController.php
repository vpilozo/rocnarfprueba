<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Productos;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(Request $r)
    {
        switch ($r->submenu) {
            case 'detalle':
                $data["producto"] = Productos::getProductos($r->id);
                $data['titulo'] = $data["producto"]->nombre . ' - Tienda BioFemme';
                $data['title'] = true;
                $data["listaProductos"] = Productos::getProductos('', true);
                $data['detalle'] = true;
                $data['footer'] = true;
                break;
            default:
                $data = [];
                break;
        }
        return view('layouts.view_childs', $data);
    }
}
