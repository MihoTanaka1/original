<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    protected $table = 'travels';
    protected $guarded = array('id');

    public static $rules = array(
        'title' => 'required',
        'body' => 'required',
        'yosan' => 'required',
        'kikan' => 'required',
        'ninnzuu' => 'required',
        'category' => 'required',
        'image' => 'required',
    );
    
    public function histories()
    {
        return $this->hasMany('App\History');

    }
}
