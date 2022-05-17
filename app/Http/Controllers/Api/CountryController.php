<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function index()
    {
        return response()->json(Country::all());
    }

    public function getCities($country_id)
    {
        $cities = City::where('country_id', $country_id)->get();

        return response()->json($cities);
    }
}
