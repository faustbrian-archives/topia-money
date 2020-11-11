<?php

namespace App\Http\Controllers;

use App\Http\Resources\ServiceResource;
use App\Models\Service;
use Illuminate\Http\Request;

class ListServicesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return ServiceResource::collection(Service::paginate());
    }
}
