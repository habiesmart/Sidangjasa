<?php

namespace App\Models;

use App\Models\Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CartDetail extends Model
{
    use HasFactory;
    
    protected $table = 'cart_details';
    protected $fillable = ['product_id', 'quantity', 'price'];
    public $timestamps = true;
    
    public static function relations(): array {
        return ['cart'];
    }

    /**
     * Get the cart that owns the CartDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cart(): BelongsTo
    {
        return $this->belongsTo(Cart::class);
    }
}
