<?php

namespace App\Jobs;

use App\Models\Symbol;
use App\Models\SymbolRate;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class IndexSymbolRates implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * The symbol whoms rates should be indexed.
     *
     * @var \App\Models\Symbol
     */
    public $symbol;

    /**
     * The number of times the job may be attempted.
     *
     * @var int
     */
    public $tries = 5;

    /**
     * The number of seconds the job can run before timing out.
     *
     * @var int
     */
    public $timeout = 180;

    /**
     * The number of seconds to wait before retrying the job.
     *
     * @var int
     */
    public $backoff = 10;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Symbol $symbol)
    {
        $this->symbol = $symbol;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        SymbolRate::upsert(
            array_map(
                fn ($item) => array_merge($item, ['symbol_id' => $this->symbol->id]),
                $this->symbol->service->service()->historical($this->symbol)
            ),
            ['symbol_id', 'date']
        );
    }
}
