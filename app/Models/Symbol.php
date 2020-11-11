<?php

namespace App\Models;

use App\Models\Concerns\HasSlug;
use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Symbol extends Model
{
    use HasFactory;
    use HasSlug;

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function rates(): HasMany
    {
        return $this->hasMany(SymbolRate::class);
    }

    public static function findByPair(string $source, string $target): Collection
    {
        $sourceTarget = static::where(['source' => strtoupper($source), 'target' => strtoupper($target)])->get();
        $targetSource = static::where(['source' => strtoupper($target), 'target' => strtoupper($source)])->get();

        return $sourceTarget->merge($targetSource);
    }

    public static function findBySymbol(string $symbol): self
    {
        return static::query()
            ->where('source', strtoupper($symbol))
            ->orWhere('target', strtoupper($symbol))
            ->firstOrFail();
    }

    public static function findBySource(string $symbol): Collection
    {
        return static::where('source', strtoupper($symbol))->get();
    }

    public static function findByTarget(string $symbol): Collection
    {
        return static::where('target', strtoupper($symbol))->get();
    }
}
