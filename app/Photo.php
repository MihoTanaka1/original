<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'photo';
    protected $guarded = array('id');

    public static $rules = array(
        'Placename' => 'required',
        'image' => 'required',
    );
}
