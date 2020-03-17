<?php

use Illuminate\Database\Seeder;
use \App\File;
use Illuminate\Support\Facades\Storage;



class FilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dir = '/';
	    $recursive = false; // Get subdirectories also?
	    $contents = collect(Storage::disk('google')->listContents($dir, $recursive))->where('type', '=', 'file');
	    foreach ($contents as $content) {
	    	$file = new File();
            $file->title = $content['name'];
            $file->fileSize = $content['size'];
            $file->mimeType = $content['mimetype'];
            $file->downloadUrl = 'https://drive.google.com/uc?id='.$content['path'].'&export=download';
            $file->save();
	    }
    }
}
