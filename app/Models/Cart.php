<?php

namespace App\Models;

use App\Models\Customer;
use App\Models\CartDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
    public function customer(): HasMany
    {
        return $this->hasMany(Customer::class);
    }
}
