<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacion;
//doompdf
use Barryvdh\DomPDF\Facade as PDF;

class PublicacionController extends Controller
{
    //listado de publicaciones
    public function index()
    {
        $publicaciones = Publicacion::all();
        return view('publicacion.index', compact('publicaciones'));
    }

    //borrar publicacion
    public function borrar($id)
    {
        $publicacion = Publicacion::find($id);
        $publicacion->delete();
        return redirect()->route('publicacion.index');
    }

    //generar pdf de publicaciones
    public function pdf()
    {
        //recuperar 50 publicaciones
        $publicaciones = Publicacion::all()->take(50);
        $pdf = \PDF::loadView('publicacion.pdf', compact('publicaciones'));
        
        //mostrar el pdf en pantalla
        return $pdf->stream();

    }
}
