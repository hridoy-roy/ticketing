<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $allData = \App\Models\Trip::select('depart_from', 'arrive_at')->get();
        $unique = $allData->unique(function ($item) {
            return $item['depart_from'].$item['arrive_at'];
        });

        $data = [
            'trips_routes' => $unique
        ];
        return view('index')->with($data);
    }

}
