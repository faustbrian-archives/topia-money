<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\AssetRate;
use Illuminate\Http\Request;
use App\Http\Resources\RateResource;

class ShowRateByAssetController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Asset $asset, AssetRate $rate)
    {
        return RateResource::make($rate);
    }
}
