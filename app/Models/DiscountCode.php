<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiscountCode extends Model
{
    use HasFactory;

    protected $table = 'discount_codes'; // Specify table if needed, default would be 'discount_codes'

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'code',
        'discount_amount',
        'discount_percentage',
        'start_date',
        'end_date',
        'max_uses',
        'used_count',
        'minimum_order_amount',
        'is_active',
    ];

    /**
     * Scope a query to only include active discount codes.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Check if the discount code is still valid (active and within the date range).
     *
     * @return bool
     */
    public function isValid()
    {
        $now = now();
        return $this->is_active && (!$this->start_date || $this->start_date <= $now) && (!$this->end_date || $this->end_date >= $now);
    }

    /**
     * Increment the number of times the discount has been used.
     *
     * @return void
     */
    public function incrementUsage()
    {
        $this->used_count++;   
        $this->save();
    }
}
