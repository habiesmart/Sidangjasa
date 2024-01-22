<?php

namespace App\Models;

use App\Models\Label;
use App\Models\Price;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = ['*'];
    public $timestamps = true;
    
    public static function relations(): array {
        return ['labels', 'prices', 'prices.priceDetail'];
    }

    /**
     * Get all of the labels for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function labels(): HasMany
    {
        return $this->hasMany(Label::class);
    }

    /**
     * Get all of the prices for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prices(): HasMany
    {
        return $this->hasMany(Price::class);
    }

    /**
     * Get all of the priceDetails for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     */
    public function priceDetails(): HasManyThrough
    {
        return $this->hasManyThrough(PriceDetail::class, Price::class);
    }
}
