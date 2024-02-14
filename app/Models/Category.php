<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table ='categories';
static public function getSingle($id){
return Category::find($id);
}
    static public function getRecordCategory(){
        return self::select('categories.*')
             ->where('is_delete','=',0)
        // ->orderBy('users.id','desc')
         ->paginate(5);
    }
    static public function getCategory(){
        return self::select('categories.*')
             ->where('status','=',1)
             ->where('is_delete','=',0)
             ->get();
    }
}
