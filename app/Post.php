<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Post extends Model
{
    //
    protected $fillable = [
        'pimg', 'pdesc'
    ];
    public function user()
    {
        return $this->belongsTo(User::class , 'user_id' , 'id');
    }
}
