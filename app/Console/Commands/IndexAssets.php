<?php

namespace App\Console\Commands;

use App\Models\Asset;
use App\Models\Symbol;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class IndexAssets extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'index:assets';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $symbols = Symbol::distinct('source')->get();

        foreach ($symbols as $symbol) {
            Asset::upsert([
                'type'   => 'crypto',
                'name'   => $symbol->source,
                'symbol' => $symbol->source,
                'slug'   => Str::slug($symbol->source),
            ], ['type', 'name', 'symbol']);
        }
    }
}
