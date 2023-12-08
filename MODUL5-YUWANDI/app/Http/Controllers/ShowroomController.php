<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\showroom_mobil;

class ShowroomController extends Controller
{
    public function create() {
        return view('showroom/create');
    }

    public function store(Request $request) {

        $this->validate($request, [
                'nama_mobil' => 'requiered',
                'brand_mobil' => 'requiered',
                'warna_mobil' => 'requiered',
                'tipe_mobil' => 'requiered',
                'harga_mobil' => 'requiered'
        ]);
        
        showroom_mobil::create([
                'nama_mobil' => $request->name,
                'brand_mobil' => $request->brand,
                'warna_mobil' => $request->warna,
                'tipe_mobil' => $request->tipe,
                'harga_mobil' => $request->harga
            ]);
        
    }

    public function index() {
        $showroom = showroom_mobil::all();
        return view('showroom/index', compact('showroom'));
    }
}
