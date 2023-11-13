<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\ville;
use Illuminate\Http\Request;

class crud extends Controller
{

    public function create(){

        $villes = ville::select('id','ville','region')->get();

        return view('offers.create',compact('villes'));
    }

    public function store(request $request){

        Offer::create([
            'name' => $request -> name,
            'price' => $request -> price,
            'details' => $request -> details,
        ]);

        return redirect()->back();
    }


}
