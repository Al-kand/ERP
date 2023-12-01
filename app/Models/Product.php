<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'aricle',
        'name',
        'status',
        'data'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'data' => 'array',
    ];

    /**
     * Interact with the status.
     */
    protected function status(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => $value === 'available' ? 'Доступен' : 'Не доступен',
        );
    }

    /**
     * Scope a query to only include available status.
     */
    public function scopeAvailable(Builder $query): void
    {
        $query->where('status', 'available');
    }
}
