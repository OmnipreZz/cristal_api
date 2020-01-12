<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menucategory extends Model
{
    protected $fillable = [
        'name'
    ];

    public function menus()
    {
    	return $this->hasMany('App\Menu');
    }
}
