<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    protected $fillable = ['title', 'downloadUrl','fileSize','mimeType'];
    protected $table = 'files';
    

}
