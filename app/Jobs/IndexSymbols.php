<?php

namespace App\Jobs;

use App\Models\Service;
use App\Models\Symbol;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class IndexSymbols implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function handle()
    {
        // @TODO: attach source and target? Difficult to do with some services because they don't return the base and quote.

        $symbols = collect($this->service->service()->symbols())->map(fn ($symbol) => [
            'service_id' => $this->service->id,
            'symbol'     => $symbol['symbol'],
            'source'     => $symbol['source'],
            'target'     => $symbol['target'],
        ]);

        Symbol::upsert($symbols->toArray(), ['service_id', 'symbol']);
    }
}
