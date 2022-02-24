<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'title' => 'required',
        'body' => 'required',
        'yosan' => 'required',
        'kikan' => 'required',
        'ninnzuu' => 'required',
        'category' => 'required',
        'image_path' => 'required',
    );
}
