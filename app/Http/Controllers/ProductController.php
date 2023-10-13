<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($catid = null, $idi = null, $tr = null,$id2=NULL)
    {



        if ($catid == null) {
            $catid = null; $idi = null; $tr = null;$id2=NULL;
            $products = DB::table('prodect')->get();
            $category = DB::table('categories')->where('id', $catid)->get();

        } elseif ($idi == null) {
            $nb = '1';
            $products = DB::table('prodect')->where('category_type', $catid)->get();
            $category = DB::table('categories')->where('id', $catid)->get();

        } elseif ($tr == "2") {
            $nb = '2';
            $products = DB::table('prodect')->where('category_type', $catid)->where('id', '>', $idi)->get();
            $category = DB::table('categories')->where('id', $catid)->get();

        } elseif ($tr == "3") {
            $nb = '3';
            $products = DB::table('prodect')->where('category_type', $catid)->where('id', '>', $idi)->get();
            $category = DB::table('categories')->where('id', $catid)->get();

        }

        return view('products', ['products' => $products,'categories' => $category, 'chek' => $nb, 'catid' => $catid, 'idr' => $id2]);
    }
}
