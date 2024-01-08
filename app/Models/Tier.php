<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
