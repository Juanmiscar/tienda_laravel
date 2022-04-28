<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoriaController extends Controller
{
    public function editarCategoria(Request $request){
        $categoria = Category::findOrFail($request->route('id'));
        return view('home')->with('info_categoria',$categoria);
    }
}
