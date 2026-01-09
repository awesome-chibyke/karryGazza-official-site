<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product_Table extends Model
{
    use HasFactory, SoftDeletes;

    protected $primaryKey = 'unique_id';
    public $incrementing = false;
    protected $keyType = 'string';
    public $productImagePath = 'public/product_images/';//use in controller
    public $productStorageDisplayImagePath = 'storage/public/product_images/';//use this in view

      /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'unique_id',
        'category_unique_id',
        'product_name',
        'price',
        'cancelled_price',
        'thumbnail',
        'discount',
        'quantity',
        'tax',

    ];

    function category(){
        return $this->belongsTo(Category::class, 'category_unique_id');
    }

    function productDetails(){
        return $this->hasMany(Product_Detail::class, 'product_unique_id');
    }
}
