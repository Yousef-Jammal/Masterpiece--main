<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'title',
        'category_id',
        'price',
        'status',
        'color',
        'size',
        'gender',
        'quantity',
        'description',
        'store_id'
    ];

    /**
     * Automatically set the 'code' to 'TWT-id' after creation.
     */
    // protected static function booted()
    // {
    //     static::creating(function ($product) {
    //         // Set the code to 'TWT-' followed by a temporary id placeholder (like null or 0)
    //         // since we don't have the real id yet
    //         $product->code = 'TWT-'; // مؤقتا، سنحدد الـ ID لاحقاً بعد الحفظ
    //     });

    //     static::created(function ($product) {
    //         // Set the actual code to 'TWT-' followed by the real id
    //         $product->code = 'TWT-' . $product->id;
    //         $product->save();
    //     });
    // }


    /**
     * Get the category associated with the product.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Get the store associated with the product.
     */
    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
