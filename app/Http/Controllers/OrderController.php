<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order
use App\User
class OrderController extends Controller
{
    public function upload(){
		return view('upload');
	}

	public function proses_upload(Request $request){
		$this->validate($request, [
			'file' => 'required',
			'keterangan' => 'required',
		]);

		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');

      	        // nama file
		$file->getClientOriginalName();
		

      	        // ekstensi file
		$file->getClientOriginalExtension();
		

      	        // real path
		$file->getRealPath();
		

      	        // ukuran file
		$file->getSize();
		

      	        // tipe mime
		$file->getMimeType();

      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'local';

                // upload file
        $file->move($tujuan_upload,$file->getClientOriginalName());
        }
}
