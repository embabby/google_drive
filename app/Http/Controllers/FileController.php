<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class FileController extends Controller
{

	public function index(){
		$dir = '/';
	    $recursive = false; // Get subdirectories also?
	    $contents = collect(Storage::disk('google')->listContents($dir, $recursive));

	    //return $contents->where('type', '=', 'dir'); // directories
	    return $contents->where('type', '=', 'file'); // files
	}



	public function store(){
		Storage::cloud()->put('test.txt', 'Hello World');
	}
}