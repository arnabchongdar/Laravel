<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class packages extends Model
{
    protected $table='packages';

    public $primarykey='id';

    public $timestamp=true;

    public function packages(){
        return $this->belongsTo('App\User');
    }
}
