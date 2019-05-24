<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Order;
use Auth;


class UploadController extends Controller
{
	public function upload(){
		return view('upload');
	}
	public function kirimfile(Request $request)
    {
        $this->validate(request(),
        [
			'nama' => 'required',
			'email' => 'required',
			'jenis_lembar_dokumen' => 'required',
			'jumlah_lembar'=> 'required',
			'alamat'=>'required',
			'keterangan'=>'required',
            'file' => 'required|mimes:pdf'
        ]);
        $order = new Order;
        $order->user_id = Auth::user()->id;
        $order->nama = $request->input('nama');
        $order->email = $request->input('email');
        $order->jenis_lembar_dokumen = $request->input('jenis_lembar_dokumen');
        $order->jumlah_lembar = $request->input('jumlah_lembar');
        $order->alamat = $request->input('alamat');
        $order->keterangan = $request->input('keterangan');
        $exist = Storage::disk('local')->exists('file',$order->file);
        if($exist){
            Storage::disk('local')->delete('file',$order->file);
        }
        if($request->hasFile('file')){
            $name = Storage::disk('local')->put('file', $request->file);
            $order->file = $name;
        }
		$order->save();
        return view('harga')->with(['order' => $order]);
	}
	public function proses_upload(Request $request){
		$this->validate($request, [
			'file' => 'required',
			'keterangan' => 'required',
		]);

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');

      	        // nama file
		echo 'File Name: '.$file->getClientOriginalName();
		echo '<br>';

      	        // ekstensi file
		echo 'File Extension: '.$file->getClientOriginalExtension();
		echo '<br>';

      	        // real path
		echo 'File Real Path: '.$file->getRealPath();
		echo '<br>';

      	        // ukuran file
		echo 'File Size: '.$file->getSize();
		echo '<br>';

      	        // tipe mime
		echo 'File Mime Type: '.$file->getMimeType();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'local';

                // upload file
		$file->move($tujuan_upload,$file->getClientOriginalName());
	}
}