<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class color extends Model
{

    public function product()
    {
        return $this->hasMany(Product::class, 'colorid');
    }

    use HasFactory;
    protected $table = 'color';
    protected $fillable = ['colorid','color','colordescription'];
    protected $primaryKey = 'colorid';
    public $timestamps = false;
    // protected $connection = 'color';
}


