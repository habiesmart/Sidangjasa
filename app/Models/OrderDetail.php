<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderDetail extends Model
{
    use HasFactory;
    
    protected $table = 'order_details';
    protected $fillable = ['product_id', 'quantity', 'price'];
    public $timestamps = true;
    
    public static function relations(): array {
        return ['order', 'product'];
    }

    /**
     * Get the order that owns the OrderDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    /**
     * Get all of the product for the OrderDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
