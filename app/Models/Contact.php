<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';

    protected $fillable =[
        'fullName', 'email', 'phone','message'
    ] ;

    public function user(){
        return $this->hasOne('App\Models\User','id','user_id');
    }
}
