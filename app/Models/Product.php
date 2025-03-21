<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'stock', 'is_digital'];

    public function attributes()
    {
        return $this->belongsToMany(Attribute::class, 'product_attribute')
                    ->withPivot('value', 'price_adjustment', 'stock');
    }

    public function discounts()
    {
        return $this->hasMany(Discount::class);
    }

    public function digitalFiles()
    {
        return $this->hasMany(DigitalFile::class);
    }
}