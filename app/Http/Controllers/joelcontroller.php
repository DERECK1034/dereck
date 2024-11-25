<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\colores;
use App\Models\productos;

class joelcontroller extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }

    public function exa1joel()
    {
        $colores = colores::orderby('nombre','asc')->get();
        $idultimoprod = \DB::select("SELECT idp +1 as nuevacalve from productos order by idp desc limit 1");
        $sigue = $idultimoprod[0]->nuevacalve;
        return view('exa1joel')->with('colores',$colores)->with('sigue',$sigue);
        //return view('exa1joel');
    }

    public function guardaprod(request $request)
    {
        $this->validate($request,['nombre' => 'required|regex:/^[A-Z]{2}-\d{2}$/',
                                  'costo'=>'required|decimal:1',
			                      'almacen'=>'required|regex:/^[A-Z,a-z]{1}[0-9]+$/']);

        $productos = new productos;
        $productos->nombre=$request->nombre;
        $productos->costo=$request->costo;
        $productos->almacen=$request->almacen;
        $productos->idco=$request->idco;
        $productos->region=$request->region;
        $productos->save();

        return "Registro guardado";
    }

    public function reporte()
    {
        $productos =\DB::select("SELECT p.idp, p.nombre, p.costo, p.almacen, c.nombre as color ,p.region
        from productos as p 
        INNER JOIN colores as c on c.idco = p.idco
        ORDER BY p.idp asc");
        

        return view('exa2joel')->with('productos',$productos);
    }
}
