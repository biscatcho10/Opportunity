<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'prefix',
        'suffix',
        'asociation',
        'title',
        'comp_website',
        'str_add_one',
        'str_add_two',
        'city',
        'state',
        'country',
        'comp_type',
        'tax_add',
        'send_mail',
        'image',
        'user_id',
        'zip'
        
    ];


    public function getImageAttribute($val){
        return ($val != null) ? asset('assets/images/users/'.$val) : "" ;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
