<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Comment;
use App\Models\User;
class Post extends Model
{
    use HasFactory;

    protected $fillable=['user_id','Category_id','title','brief','post','enabled','create_at','image','content'];
    protected $hidden=['created_at','updated_at','id','enabled'];

    public function Category()
    {
        return $this->belongsTo(Category::class,'Category_id');
    }


    public function User()
    {
        return $this->belongsTo(User::class,'user_id');
    }


    public function Comment()
    {
        return $this->hasOne(Comment::class,'id');

    }
    public static function GetPosts($IdCategory)
    {
        $Posts=Post::with('User')->where('enabled','=',true)->where('Category_id','=',$IdCategory)->get();
        return $Posts;

    }

    public static function GetAllPosts()
    {
        $Posts=Post::with('User')->where('enabled','=',true)->get();
        return $Posts;

    }


    public static function GetPost($IdPost)
    {
        $Posts=Post::with('User')->where('enabled','=',true)->where('id','=',$IdPost)->get();
        return $Posts;

    }


}
