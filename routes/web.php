<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    // $data = ['pasta' => $arrayPasta, 'nomePagina' => 'La Molisana - Home'];
    $pasta = config('pasta');

    $collection = collect($pasta);
    // $lunghe = $collection->filter(function ($item, $key) {
    //     return  $item['tipo'] === 'lunga';
    // });

    $lunghe = $collection->where('tipo', 'lunga');
    $corte = $collection->where('tipo', 'corta');
    $cortissime = $collection->where('tipo', 'cortissima');

    // dd($lunghe);
    // $corte = [];
    // $cortissime = [];

    // $lunghe = [];
    // $corte = [];
    // $cortissime = [];

    // foreach ($pasta as $key => $value) {
    //     if ($value['tipo'] === 'lunga') {
    //         $lunghe[] = $value;
    //     } else if ($value['tipo'] === 'corta') {
    //         $corte[] = $value;
    //     } else if ($value['tipo'] === 'cortissima') {
    //         $cortissime[] = $value;
    //     }
    // }

    // $data = ['pasta' => config('pasta'), 'nomePagina' => 'La Molisana - Home'];

    //passiamo le tre variabili
    $data = [
        'lunghe' => $lunghe,
        'corte' => $corte,
        'cortissime' => $cortissime,
        'nomePagina' => 'La Molisana - Home'
    ];

    // return view('guest.home', ['pasta' => $pasta]);
    return view('guest.home', $data);
})->name('home');


//pagina singolo prodotto, passiamo id tramite rotta
Route::get('products/{id}', function ($id) {
    $collection = collect(config('pasta'));
    $product = $collection->where('id', $id);

    // dd($product->count());
    if ($product->count() === 0) {
        abort(404);
    }

    $singleProduct = '';
    foreach ($product as $value) {
        $singleProduct = $value;
    }

    return view('guest.product', [
        'product' => $singleProduct,
        'nomePagina' => $singleProduct['titolo']
    ]);
})->name('product');


//pagine di prova
Route::get('/products', function () {
    return view('guest.products');
})->name('prodotti');

Route::get('/news', function () {
    return view('guest.news');
})->name('news');


// Route::get('/', function () {
//     return 'Pinco Pallo';
// });
