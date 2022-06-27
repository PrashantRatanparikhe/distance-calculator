<?php

namespace App\Http\Controllers;

use App\Http\Requests\Index as IndexRequest;
use Codifun\Distance\Helpers\Distance as DistanceHelper;

class IndexController extends Controller
{
    use DistanceHelper;

    /**
     * Display list of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Calculate the result.
     *
     * @param \App\Http\Requests\Index $request
     * @return \Illuminate\Http\Response
     */
    public function calculate(IndexRequest $request)
    {
        $params = $request->all();
        $result = [
            'hamming_distance' => self::GetHammingDistance($request->string_one, $request->string_two),
            'levenshtein_distance' => self::GetLevenshteinDistance($request->string_one, $request->string_two)
        ];

        return view('index', compact('result', 'params'));
    }
}
