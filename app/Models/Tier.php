<?php

namespace App\Models;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tier extends Model
{
    use HasFactory;

    protected $table = 'tiers';
    // protected $fillable = ['name', 'is_active'];
    protected $fillable = ['*'];
    public $timestamps = true;

    public static function getTableName()
    {
        return (new self())->getTable();
    }

    /**
     * Get all of the customers for the Tier
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function customers(): HasMany
    {
        return $this->hasMany(Customer::class);
    }
}
