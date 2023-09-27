<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class,'profiles_id','user_id');
    }
    // function user(){
    //     return $this->hasOne(User::class,'user_id','user_id');
    // }
}
