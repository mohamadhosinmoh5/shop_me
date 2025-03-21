<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DigitalFile extends Model
{
    protected $fillable = ['product_id', 'file_path', 'file_name'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}