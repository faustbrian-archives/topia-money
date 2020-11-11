<?php

namespace App\Http\Controllers;

use App\Models\Symbol;
use Illuminate\Http\Request;
use App\Http\Resources\RateResource;

class ShowRatesBySymbolController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Symbol $symbol)
    {
        return RateResource::collection($symbol->rates()->paginate());
    }
}
