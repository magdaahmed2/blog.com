<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table ='blogs';
    static public function getRecordBlog(){
        return self::select('blogs.*')
           //  ->where('is_delete','=',0)
        // ->orderBy('users.id','desc')
         ->paginate(5);
    }
}
