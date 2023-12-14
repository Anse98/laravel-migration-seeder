<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {

        return view('index');
    }

    public function train()
    {
        $trains = Train::whereDate('giorno_partenza', '>=', date('Y-m-d'))->get();

        return view('trains', compact('trains'));
    }
}
