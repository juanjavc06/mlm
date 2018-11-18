<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\States;

class CountriesAndStatesController extends Controller
{
    function getStates(Request $request){
        $country_id = $request->input("id");
        return json_encode(States::where('country_id', $country_id) ->orderBy('name', 'asc')->get());
    }
}
