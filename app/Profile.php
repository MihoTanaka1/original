<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profile';
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
    );
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
