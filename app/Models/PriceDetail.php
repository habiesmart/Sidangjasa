<?php

namespace App\Models;

use App\Models\Price;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PriceDetail extends Model
{
    use HasFactory;

    protected $table = 'price_details';
    protected $fillable = ['tier_id', 'is_tier', 'price'];
    public $timestamps = true;

    public static function relations(): array {
        return ['price', 'price.product'];
    }
    /**
     * Get the price that owns the PriceDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function price(): BelongsTo
    {
        return $this->belongsTo(Price::class);
    }

    public function country(){
        return $this->price->product;
    }
}
