<?php

use App\Models\Candy;
use App\Models\GetModels;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/{type}', function ($type) {
    $files = File::files(resource_path("{$type}"));
    
    foreach ($files as $file) {
        $document = YamlFrontMatter::parseFile($file);
        $link = "/{$type}/$document->title";
        $sweets[] = new GetModels ($document->title, $document->image, $document->body(), $link);
    }

    return view('type', ['types' => $sweets]);
});

Route::get('/{type}/{candy}', function ($type, $candy) {
    $document = YamlFrontMatter::parseFile(resource_path("{$type}/{$candy}.html"));

    $link = "/{$type}/{$candy}";

    $sweets = new GetModels ($document->title, $document->image, $document->body(), $link);
    
    return view('candy', ['candy' => $sweets]);
});



