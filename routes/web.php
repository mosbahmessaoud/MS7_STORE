<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('layout/main_fix');
// });


Route::get('/welcome/{catid?}', function ($catid=NULL) {
    $produt = DB::table('prodect')->orderByRaw('prodect.price')->get();
    $categories = DB::table('categories')->get();


    return view('welcome',['produt'=>$produt ,'categories'=>$categories ,'catid'=>$catid ]);
});


Route::get('/categories', function () {

    $categories = DB::table('categories')->get();
    return view('categories',['categories'=>$categories ]);
});


Route::get('/shop/{catid?}', function ($catid=NULL) {
    if ($catid == null) {

        $products = DB::table('prodect')->get();
        $categories = DB::table('categories')->get();


    } else {
        $products = DB::table('prodect')->where('category_type', $catid)->get();
        $categories = DB::table('categories')->get();

    }



    return view('shop',['categories'=>$categories ,'products'=>$products ,'catid'=>$catid ]);
})->name("shop.produit");

// Route::get('/shop/{catid?}/{idi?}/{tr?}/{id2?}', function ($catid=NULL, $idi = null, $tr = null,$id2=NULL) {
//     if ($catid == null) {
//         $catid = null; $idi = null; $tr = null;$id2=NULL;
//         $categories = DB::table('categories')->where('catigory_titel' , $catid)->get();
//         $products = DB::table('prodect')->get();

//         }elseif(count($products)==0 && count($categories)>1 ){
//             $categories = DB::table('categories')->join('prodect','categories.catigory_titel','=','prodect.category_type')
//             ->select('categories.*','prodect.*')
//             ->groupBy('categories.catigory_titel')
//             ->havingRaw("(COUNT(*) > 3)")
//             ->orderByDesc('categories.created_at')
//             ->limit(4)
//             ->get() ;
//             foreach ( $categories as $key => $value )
//             $categories[$key]->productCount = DB::table('prodect')->where([ ['category_type', '=', $value->catigory_titel],['status',"=","active"] ])->count();
//             }elseif(count($products)==0 && count($categories)<=1 ){
//                 $categories[0]=$categories[0];
//                 }

// return view('shop',[ 'categories'=> $categories,'products'=>$products ,'catid'=>$catid ]);
//                 })->name("shop");





// Route::get('/products/{catid?}', function ($catid = NULL) {

//     if($catid == NULL){
//         $products = DB::table('prodect')->get();

//     }else{
//         $products = DB::table('prodect')->where('category_type' , $catid)->get();
//     }
//     return view('products', ['products' => $products ,'chek' => '1' ,'catid' => $catid]);
// })->name("products");

use App\Http\Controllers\ProductController;

Route::get('/products/{catid?}/{idi?}/{tr?}/{id2?}', [ProductController::class, 'index']);


// Route::get('/products/{catid?}/{idi?}/{tr?}', function ($catid = NULL ,$idi=NULL,$tr=NULL) {
//     if($idi==NULL){
//         $id2=$idi;
//     }
//     if($catid == NULL){
//         $products = DB::table('prodect')->get();
//         $nb='1';
//         return view('products', ['products' => $products , 'chek' => $nb ,'catid' => $catid ]);

//     }elseif($idi == NULL ){
//             $nb='1';
//             $products = DB::table('prodect')->where('category_type' , $catid)->get();
//             return view('products', ['products' => $products , 'chek' => $nb ,'catid' => $catid ]);

//         }elseif($tr=="2"){
//             $nb='2';


//     $products = DB::table('prodect')->where('category_type', $catid)->where('id', '>', $idi)->get();



//                 return view('products', ['products' => $products , 'chek' => $nb ,'catid' => $catid ]);

//                 }elseif($tr=="3"){
//                 $nb='3';
//                 $products = DB::table('prodect')->where('category_type', $catid)->where('id', '>', $idi)->get();

//                 return view('products', ['products' => $products , 'chek' => $nb ,'catid' => $catid,'idr'=>$id2 ]);


//                 };
// });





/*
Electronics:

Smartphone
Laptop
Headphones
Smartwatch
Digital Camera


Clothing and Fashion:

T-shirt
Jeans
Dress
Sneakers
Handbag


Home and Kitchen Appliances:

Refrigerator
Microwave Oven
Coffee Maker
Vacuum Cleaner
Air Purifier


Beauty and Personal Care:

Shampoo
Perfume
Makeup Kit
Razor
Skincare Products


Toys and Games:

Board Games
Action Figures
LEGO Sets
Dolls
Puzzles


Sports and Outdoor Equipment:

Bicycle
Camping Gear
Soccer Ball
Yoga Mat
Hiking Boots


Jewelry and Accessories:

Necklace
Earrings
Bracelet
Sunglasses
Watches


Books and Media:

Bestselling Novel
DVD Box Set
Vinyl Records
Educational Books
Video Games


Health and Wellness:

Vitamins and Supplements
Fitness Tracker
Massage Chair
Yoga Accessories
Resistance Bands


Home Decor and Furniture:

Sofa
Dining Table
Wall Art
Bedside Lamp
Area Rug
*/
