<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Bab;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBabRequest;
use App\Http\Requests\UpdateBabRequest;

class BabController extends Controller
{
    public function index()
    {
        $babs = Bab::with(['question'])->get();

        $data = [
            'babs' => $babs
        ];
        return view('bab.index', $data);
    }

    public function create()
    {
        $data = [];
        return view('bab.create', $data);
    }

    public function store(StoreBabRequest $request)
    {
        // dd($request->all());
        $user = Bab::create([
            'nama'      => $request->nama,
            'mapel_id'  => $request->mapel_id
        ]);
        if($user){
            return redirect()->back()->with(['success' => 'Data Bab berhasil ditambahkan!']);
        }else{
            return redirect()->back()->with(['failed' => 'Data Bab gagal ditambahkan!']);
        }
    }

    public function edit(Bab $bab)
    {
        $data = [
            'bab' => $bab];
        return view('bab.edit', $data);
    }

    public function update(UpdateBabRequest $request, Bab $bab)
    {
        try {
            $bab->update($request->validated());

            return redirect()->back()->with(['success' => 'Data ujian berhasil diubah']);
        }

        catch (Exception $e) {
            return redirect()->back()->with(['failed' => 'Data ujian tidak berhasil diubah']);
        }
    }

    public function destroy(Bab $bab)
    {
        if (!$bab) {
            return redirect()->route('bab.index')->with(['failed' => 'Bab tidak berhasil dihapus']);
        }

        $bab->delete();
        return redirect()->route('bab.index')->with(['success' => 'Bab berhasil dihapus']);
    }
}
