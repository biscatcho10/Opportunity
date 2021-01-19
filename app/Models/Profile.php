<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
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
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
