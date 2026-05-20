<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use Illuminate\Http\Request;

class NasabahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nasabah = Nasabah::all();
        return view('nasabah', ['nasabah' => $nasabah]);
    }

    public function tambah(){
        return view('nasabah_tambah');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik'=>'required',
            'nama'=>'required',
            'alamat'=>'required',
            'no_hp'=>'required'
        ]);

        // fungsi membuat nomor rekening
        $lastNasabah = Nasabah::orderBy('id', 'desc')->first();

        if ($lastNasabah) {
            $lastNumber = (int) substr($lastNasabah->no_rekening, 2);
            $newNumber = $lastNumber + 1;
        } else {
            $newNumber = 1;
        }

        $noRekening = 'BS' . str_pad($newNumber, 3, 0, STR_PAD_LEFT);

        Nasabah::create([
            'no_rekening' => $noRekening,
            'nik'=>$request->nik,
            'nama'=>$request->nama,
            'alamat'=>$request->alamat,
            'no_hp'=>$request->no_hp,
            'saldo' => 0,
        ]);

        return redirect()->route('nasabah.index')
                            ->with([
                                'success' => 'Nasabah berhasil ditambahkan!',
                                'error' => 'Terjadi kesalahan'
                            ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
