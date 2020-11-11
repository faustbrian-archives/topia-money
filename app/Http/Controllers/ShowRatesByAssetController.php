<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;
use App\Http\Resources\RateResource;

class ShowRatesByAssetController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Asset $asset)
    {
        return RateResource::collection($asset->rates()->paginate());
    }
}
