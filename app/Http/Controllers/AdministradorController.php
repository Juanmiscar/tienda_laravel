<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdministradorController extends Controller
{
    public function create(Request $request){
        $name = $request->name;

        $data=array('name'=>$name);

        DB::table('categories')->insert($data);

        return view("administrador.adminCategorias");
    }

    public function addOrder(Request $request){
        $date = $request->date;
        $idUser = $request->idUser;
        $price = $request->priceTotal;

        $data=array('date'=>$date,'idUser'=>$idUser,'priceTotal'=>$price);

        DB::table('orders')->insert($data);

        return view("administrador.adminPedidos");
    }

    public function addProduct(Request $request){
        $name = $request->name;
        $stock = $request->stock;
        $price = $request->price;
        $photo = $request->photo;
        $idCategoria = $request->idCategoria;

        $data=array('name'=>$name,'stock'=>$stock,'price'=>$price,'photo'=>$photo,'idCategoria'=>$idCategoria);

        DB::table('products')->insert($data);

        return view("administrador.adminProductos");
    }

    
}
