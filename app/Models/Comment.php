<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use App\Models\User;
class Comment extends Model
{
    use HasFactory;
    protected $fillable=['create_at','enabled','post_id','user_id','comment'];


    protected $hidden=['created_at','updated_at'];

    public function Post()
    {
        return $this->belongsTo(Post::class,'post_id');
    }

    public function User()
    {
        return $this->belongsTo(User::class,'User_id');
    }

    public static function GetComments($IdPost)
    {
        $Post=Comment::where('enabled','=',true)->where('post_id','=',$IdPost)->get();
        return $Post;

    }


    public static function GetAllComments()
    {
        $Post=Comment::with('user')->where('enabled','=',true)->get();
        return $Post;

    }
}
