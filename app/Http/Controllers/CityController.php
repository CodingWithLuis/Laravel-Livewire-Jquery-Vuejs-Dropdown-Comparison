<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::when(request()->input('country_id'), function ($query) {
            $query->where('country_id', request()->input('country_id'));
        })->pluck('name', 'id');

        return response()->json($cities);
    }
}
