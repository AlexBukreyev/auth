<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;
use App\Http\Requests;     // maybe delete!!!!

class PropertyController extends Controller
{
    public  function getIndex() {
        $properties = Property::all();
        return view('sh.index', ['properties' => $properties]);
    }
}
