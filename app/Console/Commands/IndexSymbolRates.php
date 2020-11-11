<?php

namespace App\Console\Commands;

use App\Jobs\IndexSymbolRates as Job;
use App\Models\Service;
use Illuminate\Console\Command;

class IndexSymbolRates extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'index:symbol:rates';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Index historical rates for each symbol on each service.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        foreach (Service::get() as $service) {
            $service->symbols->each(fn ($symbol) => Job::dispatch($symbol));
        }
    }
}
