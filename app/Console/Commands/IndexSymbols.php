<?php

namespace App\Console\Commands;

use App\Models\Service;
use Illuminate\Console\Command;
use App\Jobs\IndexSymbols as Job;

class IndexSymbols extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'index:symbols';

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
        Service::get()->each(fn ($service) => Job::dispatch($service));
    }
}
