<?php

namespace App\Http\Controllers;
use App\Models\Auto;
use App\Models\Categorie;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class CarController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }

    public function add_car() {
        return view('add-car');
    }

    public function include_car(Request $request) {
        $auto = $request->validate(
            [
                'merk' => 'required',
                'type' => 'required',
                'bouwdatum' => 'required',
                'image' => 'required',
                'inkoop' => 'required',
                'verkoop' => 'required',
                'kenteken' => 'required'
            ]
        );

        $request->validate([ 'soort' => 'required' ]);

        $image = $auto['image']->store('autos', 'public');
        $auto['image'] = $image;

        $car = Auto::create($auto);

        Categorie::create([ 
            'auto_id' => $car->id, 
            'soort' => $request->input('soort')
        ]);

        return redirect()->route('home');
    }

    public function delete_car($id) {
        $image = Auto::where('id', $id)->get();

        foreach($image as $row) :
            Storage::disk('public')->delete($row['image']);
        endforeach;

        Auto::where('id', $id)->delete();
        Categorie::where('auto_id', $id)->delete();

        return back();
    }

    public function wijzigen($id) {
        $car = Auto::where('id', $id)->get();
        $categorie = Categorie::where('auto_id', $id)->get();

        return view('change-car', ['car' => $car, 'categorie' => $categorie]);
    }

    public function delete_image($id) {
        $car = Auto::where('id', $id)->get();

        foreach($car as $row) :
            Storage::disk('public')->delete($row['image']);
        endforeach;

        Auto::where('id', $id)->update(['image' => '']);

        return back();
    }

    public function insert_change($id, Request $request) {
        $auto = $request->validate(
            [
                'merk' => 'required',
                'type' => 'required',
                'bouwdatum' => 'required',
                'inkoop' => 'required',
                'image' => '',
                'verkoop' => 'required',
                'kenteken' => 'required'
            ]
        );

        $request->validate([ 'soort' => 'required' ]);

        if($request->file('image')) :
            $image = $request->file('image')->store('autos', 'public');
            $auto['image'] = $image;
        endif;

        Auto::where('id', $id)->update($auto);
        Categorie::where('id', $id)->update(['soort' => $request->input('soort')]);

        return redirect()->route('home');
    }
}