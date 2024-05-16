<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Index as IndexRequest;
use App\Traits\Distance as DistanceHelper;
use Illuminate\Http\Response;

class IndexController extends Controller
{
    use DistanceHelper;

    /**
     * Calculate the result.
     *
     * @param \App\Http\Requests\Index $request
     * @return \Illuminate\Http\Response
     */
    public function calculateHammingDistance(IndexRequest $request)
    {
        return Response::json([
            'result' => self::GetHammingDistance(
                $request->string_one, 
                $request->string_two
            )
        ]);
    }

    /**
     * Calculate the result.
     *
     * @param \App\Http\Requests\Index $request
     * @return \Illuminate\Http\Response
     */
    public function calculateLevenshteinDistance(IndexRequest $request)
    {
        return Response::json([
            'result' => self::GetLevenshteinDistance(
                $request->string_one, 
                $request->string_two
            )
        ]);
    }
}
