<?php

namespace App\Models\Concerns;

use Spatie\Sluggable\HasSlug as Spatie;
use Spatie\Sluggable\SlugOptions;

trait HasSlug
{
    use Spatie;

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()->generateSlugsFrom('name')->saveSlugsTo('slug');
    }
}
