<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;


class Category extends Model
{
    use HasFactory;
    protected $fillable=['name','enabled'];
    protected $hidden=['id','enabled','created_at','updated_at'];

    public function Post()
    {
        return $this->hasOne(Post::class,'id');
    }



    public static function GetCategories($enabled)
    {
        $Categorias=Category::where('enabled','=',$enabled)->get();
        return $Categorias;

    }
}
