<?php

namespace App\Models;

use App\Models\Concerns\HasSlug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Asset extends Model
{
    use HasFactory;
    use HasSlug;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'is_crypto' => 'bool',
    ];

    public function rates(): HasMany
    {
        return $this->hasMany(AssetRate::class, 'source_id');
    }

    public function sourceRates(): HasMany
    {
        return $this->hasMany(AssetRate::class, 'source_id');
    }

    public function targetRates(): HasMany
    {
        return $this->hasMany(AssetRate::class, 'target_id');
    }

    public static function findBySymbol(string $symbol): self
    {
        return static::where('symbol', strtoupper($symbol))->firstOrFail();
    }

    public function scopeFiat(Builder $query): Builder
    {
        return $query->where('is_crypto', false);
    }

    public function scopeCrypto(Builder $query): Builder
    {
        return $query->where('is_crypto', true);
    }
}
