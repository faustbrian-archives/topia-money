<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Konceiver\TopiaMoney\Enums\ServiceEnum;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::upsert([
            [
                'name' => ServiceEnum::ALTILLY,
                'slug' => Str::slug(ServiceEnum::ALTILLY),
                'is_enabled' => true
            ],
            // Not fully implemented
            [
                'name' => ServiceEnum::BINANCE,
                'slug' => Str::slug(ServiceEnum::BINANCE),
                'is_enabled' => false
            ],
            [
                'name' => ServiceEnum::BITFINEX,
                'slug' => Str::slug(ServiceEnum::BITFINEX),
                'is_enabled' => true
            ],
            // Not fully implemented
            [
                'name' => ServiceEnum::BITMEX,
                'slug' => Str::slug(ServiceEnum::BITMEX),
                'is_enabled' => false
            ],
            [
                'name' => ServiceEnum::BITSTAMP,
                'slug' => Str::slug(ServiceEnum::BITSTAMP),
                'is_enabled' => true
            ],
            [
                'name' => ServiceEnum::BITTREX,
                'slug' => Str::slug(ServiceEnum::BITTREX),
                'is_enabled' => true
            ],
            [
                'name' => ServiceEnum::BITVAVO,
                'slug' => Str::slug(ServiceEnum::BITVAVO),
                'is_enabled' => true
            ],
            [
                'name' => ServiceEnum::COINBASE_PRO,
                'slug' => Str::slug(ServiceEnum::COINBASE_PRO),
                'is_enabled' => true
            ],
            // Not fully implemented
            [
                'name' => ServiceEnum::COINCAP,
                'slug' => Str::slug(ServiceEnum::COINCAP),
                'is_enabled' => false
            ],
            [
                'name' => ServiceEnum::COINGECKO,
                'slug' => Str::slug(ServiceEnum::COINGECKO),
                'is_enabled' => true
            ],
            // Not fully implemented
            [
                'name' => ServiceEnum::COINMARKETCAP,
                'slug' => Str::slug(ServiceEnum::COINMARKETCAP),
                'is_enabled' => false
            ],
            [
                'name' => ServiceEnum::CRYPTOCOMPARE,
                'slug' => Str::slug(ServiceEnum::CRYPTOCOMPARE),
                'is_enabled' => true
            ],
            // Not fully implemented
            [
                'name' => ServiceEnum::EUROPEAN_CENTRAL_BANK,
                'slug' => Str::slug(ServiceEnum::EUROPEAN_CENTRAL_BANK),
                'is_enabled' => false
            ],
            [
                'name' => ServiceEnum::EXCHANGE_RATES_API,
                'slug' => Str::slug(ServiceEnum::EXCHANGE_RATES_API),
                'is_enabled' => true
            ],
            [
                'name' => ServiceEnum::FRANKFURTER,
                'slug' => Str::slug(ServiceEnum::FRANKFURTER),
                'is_enabled' => true
            ],
            [
                'name' => ServiceEnum::GEMINI,
                'slug' => Str::slug(ServiceEnum::GEMINI),
                'is_enabled' => true
            ],
            [
                'name' => ServiceEnum::GRAVIEX,
                'slug' => Str::slug(ServiceEnum::GRAVIEX),
                'is_enabled' => true
            ],
            [
                'name' => ServiceEnum::HITBTC,
                'slug' => Str::slug(ServiceEnum::HITBTC),
                'is_enabled' => true
            ],
            [
                'name' => ServiceEnum::KRAKEN,
                'slug' => Str::slug(ServiceEnum::KRAKEN),
                'is_enabled' => true
            ],
            [
                'name' => ServiceEnum::OKCOIN,
                'slug' => Str::slug(ServiceEnum::OKCOIN),
                'is_enabled' => true
            ],
            [
                'name' => ServiceEnum::OKEX,
                'slug' => Str::slug(ServiceEnum::OKEX),
                'is_enabled' => true
            ],
            [
                'name' => ServiceEnum::POLONIEX,
                'slug' => Str::slug(ServiceEnum::POLONIEX),
                'is_enabled' => true
            ],
            // Not fully implemented
            [
                'name' => ServiceEnum::VCC,
                'slug' => Str::slug(ServiceEnum::VCC),
                'is_enabled' => false
            ],
        ], ['name']);
    }
}
