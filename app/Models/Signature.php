<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Signature extends Model
{
    protected $fillable=[
        'id',
        'name',
        'signature',
        'user_id',
        'user'

      ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function getSignatureAttribute($q){
        return ($q!==null)?asset('uploads/'.$q):"";
    }
}
