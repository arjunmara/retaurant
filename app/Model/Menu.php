<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $guarded = ['id'];

    public function Submenu()
    {
        return $this->hasMany(Submenu::class,'menu_id','id');
    }

}
