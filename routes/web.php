<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



// Route::get('/', function () {
// 	 // Storage::disk('google')->put('test.txt', 'Hello World');
// 	 // return'asdas';
// 	$dir = '/';
//     $recursive = false; // Get subdirectories also?
//     $contents = collect(Storage::disk('google')->listContents($dir, $recursive));

//     //return $contents->where('type', '=', 'dir'); // directories
//     return $contents->where('type', '=', 'file'); // files
//     return view('welcome');
//     Storage::cloud()->put('test.txt', 'Hello World');
//     return 'File was saved to Google Drive';
// });


Route::get('/', 'FileController@index')->name('file.index');

Route::post('/upload', 'FileController@store')->name('file.store');


// Route::post('/upload', function (Request $request) {
//     dd($request->file('thing')->store("", "google"));
//     // Storage::cloud()->put('test.txt', 'Hello World');
//     // return 'File was saved to Google Drive';

//     $dir = '/';
//     $recursive = false; // Get subdirectories also?
//     $contents = collect(Storage::cloud()->listContents($dir, $recursive));

//     //return $contents->where('type', '=', 'dir'); // directories
//     return $contents->where('type', '=', 'file'); // files

// });
