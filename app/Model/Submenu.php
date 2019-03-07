<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    protected $guarded = ['id'];

    public function Menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
