<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\libro;
class librocontroller extends Controller
{
    public function listarLibros()
    {
    	$libro = libro::all(['id','genero','sinopsis','autor','titulo']);

    	return $libro;
    }

    public function crearLibro(Request $request){
        $libro = new Libro;
        $libro->titulo= $request->titulo;
        $libro->genero= $request->genero;
        $libro->autor= $request->autor;
        $libro->sinopsis= $request->sinopsis;
        $libro->save();
    }

    public function editarLibro(Request $request, $id){
        $libro = Libro::find($id);
        $libro->titulo= $request->titulo;
        $libro->genero= $request->genero;
        $libro->autor= $request->autor;
        $libro->sinopsis= $request->sinopsis;
        $libro->save();
    }
    public function borrarLibro(Request $request, $id){
        $libro = Libro::find($id);
        $libro->delete();
    }
    public function listarLibrosAutor($autor)
    {
    	$libro = libro::where('autor', $autor)->get();

    	return $libro;
    }
    public function listarLibrosGenero($genero)
    {
    	$libro = libro::where('genero', $genero)->get();

    	return $libro;
    }

}
