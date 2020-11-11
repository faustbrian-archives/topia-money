<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SymbolRate extends Model
{
    use HasFactory;
    protected $casts = [
        'rate' => 'double',
        'date' => 'datetime',
    ];

    public function symbol(): BelongsTo
    {
        return $this->belongsTo(Symbol::class);
    }

    public static function hasPair(Asset $source, Asset $target): bool
    {
        return static::where([
            'source_id' => $source->id,
            'target_id' => $target->id,
        ])->count() > 0;
    }
}
