<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'customer_id',
    ];
    public function customer(){
        return $this->belongsTo('App\Models\Customer');
    }
}
