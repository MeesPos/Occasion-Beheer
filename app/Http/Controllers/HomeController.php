<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auto;
use App\Models\Categorie;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cars = Auto::all();

        $count = $cars->count();

        $totalSell = 0;
        $totalBuy = 0;

        foreach($cars as $car) {
            $totalSell = $totalSell + $car['verkoop'];
            $totalBuy = $totalBuy + $car['inkoop'];
        }

        $subSell = $totalSell / 100 * 79;
        $subBuy = $totalBuy / 100 * 79;

        $marge = $subSell - $subBuy;

        return view('home', ['cars' => $cars, 'count' => $count, 'total' => $totalSell, 'marge' => $marge]);
    }
}
