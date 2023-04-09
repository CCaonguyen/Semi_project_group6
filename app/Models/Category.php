<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class category extends Model
{
    use HasFactory;
    public function product()
    {
        return $this->hasMany(Product::Class);
    }
    protected $table = 'category';
    protected $fillable = ['categoryid','category', 'categorydescription'];
    protected $primaryKey = 'categoryid';
    public $timestamps = false;
    // protected $connection = 'category';
}
