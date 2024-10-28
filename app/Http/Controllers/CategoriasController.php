<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index(Request $r)
    {
        switch ($r->submenu) {
            case 'limpieza':
                echo 'Tiene permisos';
                break;
            default:
                echo 'No tiene permisos';
                exit;
                break;
        }
    }
}
