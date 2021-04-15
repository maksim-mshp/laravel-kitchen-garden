<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Good;

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

function goods($min = null, $max = null, $query = null)
{
    $res = array();

    // $goods = Good::whereBetween('price', [$min, $max]);
    if ($min == null) {
        if ($max == null) {
            $goods = Good::all();
        } else {
            $goods = Good::where('price', '<=', $max)->get();
        }
    } else {
        if ($max == null) {
            $goods = Good::where('price', '>=', $min)->get();
        } else {
            $goods = Good::whereBetween('price', array($min, $max))->get();
        }
    }

    foreach ($goods as $item) {
        if ($query != null) {
            if (strpos(mb_strtolower($item->name), mb_strtolower($query)) !== false) {
                array_push($res, array(
                    'name' => $item->name,
                    'info' => $item->info,
                    'price' => $item->price,
                    'img' => $item->img,
                ));
            }
        } else {
            array_push($res, array(
                'name' => $item->name,
                'info' => $item->info,
                'price' => $item->price,
                'img' => $item->img,
            ));
        }
    }

    return $res;
}

Route::any('/search/{request}/{min?}/{max?}', function ($request, $min = null, $max = null) {
    return view('goods', [
        'goods' => goods($min, $max, $request),
        'alert' => false
    ]);
})->name('search');

Route::get('/', function (Request $request) {
    return view('goods', [
        'goods' => goods(),
        'alert' => $request->alert
    ]);
})->name('main');

Route::post('/', function (Request $request) {
    $min = $request->min;
    $max = $request->max;
    if ($min == null) $min = '';
    if ($max == null) $max = '';
    return redirect("/search/$request->text/$min/$max");
});

Route::get('/add', function () {
    return view('add');
});



Route::post('/add', function (Request $request) {

    $good = new Good;
    $good->name = $request->name;
    $good->info = $request->info;
    $good->price = $request->price;
    $good->img = $request->img;
    $good->save();

    return redirect()->route('main', ['alert' => true]);
});
