<?php

namespace App\Http\Controllers;

use App\Models\Symbol;
use App\Models\SymbolRate;
use Illuminate\Http\Request;
use App\Http\Resources\RateResource;

class ShowRateBySymbolController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Symbol $symbol, SymbolRate $rate)
    {
        return RateResource::make($rate);
    }
}
