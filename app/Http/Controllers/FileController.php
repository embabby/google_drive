<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\File;




class FileController extends Controller
{

	public function index(){
		 $files = File::all();
	    return view('welcome')->with([
            'files' => $files
        ]);
	}


	public function store(Request $request){




		// Storage::cloud()->put('test.txt', 'Hello World');
		$request->file('file')->store("", "google");
		// return back();

    	$stored_file = collect(Storage::disk('google')->listContents('/', false))->where('type', '=', 'file')->sortBy('timestamp')->last();
        

		$file = new File();
        $file->title = $stored_file['name'];
        $file->fileSize = $stored_file['size'];
        $file->mimeType = $stored_file['mimetype'];
        $file->downloadUrl = 'https://drive.google.com/uc?id='.$stored_file['path'].'&export=download';
        $file->save();

		return redirect()->route('file.index');


	}
}