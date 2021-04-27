<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    protected $fillable = [
        'name', 'email', 'total_amt','payment_status','package_id','qty'
    ];

    protected $casts=[
        'package_id'=>'array',
        'qty'=>'array'
    ];
}
