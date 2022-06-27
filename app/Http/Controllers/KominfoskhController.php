<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class KominfoskhController extends Controller
{
    public function store(Request $request)
    {
        return $request->file('Foto')->store('fotoktp');

        $validateData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'category_id' => 'required',
            'foto' => 'image|file',
            'body' => 'required'
        ]);
    }
    public function  index(Request $request)
    {
        if($request->has('cari')){
            $data_kominfoskh = \App\Models\Kominfoskh::where('Nama', 'LIKE', '%'. $request->cari . '%')->get();
        }else{
            $data_kominfoskh = \App\Models\Kominfoskh::all();
        }

        return view('kominfoskh.index',['data_kominfoskh' => $data_kominfoskh]);
    }
    public function create(Request $request)
    {
        $data_kominfoskh = \App\Models\Kominfoskh::create($request->all());
        $this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'keterangan' => 'required',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
 
		Gambar::create([
			'file' => $nama_file,
			'keterangan' => $request->keterangan,
		]);
        if($request->file('Foto')){
            $validateData['Foto'] = $request->file('Foto')->store('post-Fotos');
        }
        return redirect('/kominfoskh')->with('sukses', 'Data berhasil di input');
    }
    public function edit($id)
    {
        $data_kominfoskh = \App\Models\Kominfoskh::find($id);
        return view('kominfoskh.edit',['kominfoskh' => $data_kominfoskh]);
    }
    public function update(Request $request, $id)
    {
        $data_kominfoskh = \App\Models\Kominfoskh::find($id);
        $data_kominfoskh->update($request->all());
        return redirect('kominfoskh')->with('sukses', 'Data berhasil diupdate');
    }
    public function delete($id)
    {
        $data_kominfoskh = \App\Models\Kominfoskh::find($id);
        $data_kominfoskh->delete();
        return redirect('/kominfoskh')->with('sukses', 'Data berhasil dihapus');
    }
    public function exportPdf()
    {
        $data_kominfoskh = \App\Models\Kominfoskh::all();
        $pdf = PDF::loadView('export.kominfoskhpdf',['kominfoskh' => $data_kominfoskh]);
        return $pdf->download('kominfoskh.pdf');
    }
}
