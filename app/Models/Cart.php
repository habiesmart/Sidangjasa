<?php

namespace App\Models;

use App\Models\Customer;
use App\Models\CartDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cart extends Model
{
    use HasFactory;

    protected $table = 'carts';
    protected $fillable = ['customer_id', 'grand_total'];
    public $timestamps = true;
    
    //Relasi mengikuti nama method
    public static function relations(): array {
        return ['customer', 'cartDetails'];
    }

    /**
     * Get all of the cartDetails for the Cart
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cartDetails(): HasMany
    {
        return $this->hasMany(CartDetail::class);
    }

    /**
     * Get all of the customer for the Cart
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function grandTotal()
    {
        return $this->cartDetails->map(function ($i){
            return $i->price * $i->quantity;
        })->sum();
    }
}
