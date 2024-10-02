<?php


namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\JsonResponse;

class ProductoController extends Controller
{
    /**
     * Devuelve todos los productos.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $productos = Producto::all();

        return response()->json($productos);
    }
}
