<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Resources\SymbolResource;

class ShowSymbolsByServiceController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Service $service)
    {
        return SymbolResource::collection($service->symbols()->paginate());
    }
}
