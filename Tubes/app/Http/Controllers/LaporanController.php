<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'tanggal' => 'required',
            'location_id' => 'required',
        ]);

        Laporan::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'isi' => $request->content,
            'tanggal' => $request->tanggal,
            'lokasi' => $request->location_id,
        ]);




        return redirect('/')->with('success', 'Berhasil menambahkan laporan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'tanggal' => 'required',
            'location_id' => 'required',
        ]);

        $laporan = Laporan::find($id);
        $laporan->update([
            'title' => $request->title,
            'isi' => $request->content,
            'tanggal' => $request->tanggal,
            'lokasi' => $request->location_id,
        ]);
        return redirect('/')->with('success', 'Laporan berhasil diupdate');
    }

    public function destroy($id)
    {
        $laporan = Laporan::find($id);
        $laporan->delete();
        return redirect('/')->with('success', 'Laporan berhasil dihapus');
    }
}
