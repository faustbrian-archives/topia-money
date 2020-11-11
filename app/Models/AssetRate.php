<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AssetRate extends Model
{
    use HasFactory;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'rate' => 'double',
        'date' => 'datetime',
    ];

    public function source(): BelongsTo
    {
        return $this->belongsTo(Asset::class);
    }

    public function target(): BelongsTo
    {
        return $this->belongsTo(Asset::class);
    }

    public static function hasPair(Asset $source, Asset $target): bool
    {
        return static::where([
            'source_id' => $source->id,
            'target_id' => $target->id,
        ])->count() > 0;
    }
}
