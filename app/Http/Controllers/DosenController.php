<?php

namespace App\Http\Controllers;
Use App\Models\dosen;
Use App\Models\mahasiswa;
Use App\Models\matakuliah;
Use App\Models\prodi;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $dosens = dosen::with('mahasiswa', 'matakuliah')->get();
        $data['dosen'] = $dosens;
        return view('dosen.index', $data);
    }

    public function create()
    {
        $matakuliahs = matakuliah::all();
        $mahasiswas = mahasiswa::all();
        $dosen = dosen::all();
        $data['matakuliahs'] = $matakuliahs;
        $data['mahasiswas'] = $mahasiswas;
        return view('dosen.create', $data);
    }

    public function store(Request $request) { 
        
        dosen::create([ 
            'id' => $request->input('id'), 
            'nama' => $request->input('nama'), 
            'mhs_id' => $request->input('mhs_id'), 
            'matakuliah_id' => $request->input('matakuliah_id'), 
        ]); 

        return redirect()->route('dosen.index');
    }

    public function edit($id)
    {   
        $dosen = Dosen::find($id);
        $matakuliahs = Matakuliah::all();
        $mahasiswas = Mahasiswa::all();
        return view('dosen.edit', compact('dosen', 'mahasiswas', 'matakuliahs'));
    }
    
    public function update(Request $request, $id)
    {
        $dosen = Dosen::find($id);
    
        $dosen->nama = $request->input('nama');
        $dosen->mhs_id = $request->input('mhs_id');
        $dosen->matakuliah_id = $request->input('matakuliah_id');
    
        $dosen->save();
    
        return redirect()->route('dosen.index');
    }
    

    public function destroy($id)
    {
        $dosen = dosen::find($id);

        if ($dosen) {
            $dosen->delete();

            return redirect()->route('dosen.index');
        } else {
            return redirect()->route('dosen.index');
        }
    }
}
