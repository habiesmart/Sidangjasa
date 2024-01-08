<?php

namespace App\Models;

use App\Models\PriceDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Price extends Model
{
    use HasFactory;

    protected $table = 'prices';
    protected $fillable = ['unit'];
    public $timestamps = true;

    /**
     * Get the product that owns the Price
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Get all of the price_details for the Price
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function price_details(): HasMany
    {
        return $this->hasMany(PriceDetail::class, 'price_id');
    }
}
