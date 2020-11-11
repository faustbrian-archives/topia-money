<?php

namespace App\Models;

use App\Models\Concerns\HasSlug;
use Illuminate\Database\Eloquent\Model;
use Konceiver\TopiaMoney\ServiceFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Konceiver\TopiaMoney\Contracts\Service as TopiaMoney;
use Staudenmeir\LaravelUpsert\Eloquent\HasUpsertQueries;

class Service extends Model
{
    use HasFactory;
    use HasSlug;
    use HasUpsertQueries;

    protected $casts = ['is_enabled' => 'boolean'];

    public function symbols(): HasMany
    {
        return $this->hasMany(Symbol::class);
    }

    public function service(): TopiaMoney
    {
        return ServiceFactory::make($this->slug);
    }
}
