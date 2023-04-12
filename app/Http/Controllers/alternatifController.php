<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alternatifModel;

class alternatifController extends Controller
{
    public function __construct(){
        $this->alternatifModel = new alternatifModel();
    }
    public function index(){
        $data = [
            'alternatif' => $this->alternatifModel->allData(),
        ];
        return view('v_alternatif', $data);
    }

    public function detail($id_alt){

        if(!$this->alternatifModel->detailData($id_alt)){
            abort(404);
        }

        $data = [
            'alternatif' => $this->alternatifModel->detailData($id_alt),
        ];
        return view('v_detail_alt', $data);
    }

    public function add()
    {
        return view('v_add_alt');
    }

    public function insert()
    {
        Request()->validate([
            'id_alt'=> 'required|unique:tbl_alternatif,id_alt|min:3|max:5',
            'nama_alt'=>'required',
            'alamat'=>'required',
            'kategori'=>'required',
            'gambar_alt'=>'required|mimes:webp,jpg,jpeg,png|max:1024',

        ],[
            'id_alt.required' => 'wajib diisi !!',
            'id_alt.unique' => 'kode ini sudah ada',
            'id_alt.min' => 'minimal 3 karakter',
            'id_alt.max' => 'maximal 5 karakter',
            'nama_alt.required' => 'wajib diisi !!',
            'alamat.required' => 'wajib diisi !!',
            'kategori.required' => 'wajib diisi !!',
            'gambar_alt.required' => 'wajib diisi !!',
        ]);

        $file = Request()->gambar_alternatif;
        $fileName = Request()->id_alt . '.' . $file->extension();
        $file->move(public_path('gambar_alternatif'), $fileName);

        $data = [
            'id_alt' => Request()->id_alt,
            'nama_alt' => Request()->nama_alt,
            'alamat' => Request()->alamat,
            'kategori' => Request()->kategori,
            'gambar_alt' => $fileName,
        ];

        $this->alternatifModel->addData($data);
        return redirect()->route('alternatif')->with('pesan', 'Data berhasil di tambahkan');
    }

    public function edit($id_alt)
    {
        if(!$this->alternatifModel->detailData($id_alt)){
            abort(404);
        }

        $data = [
            'alternatif' => $this->alternatifModel->detailData($id_alt),
        ];
        return view('v_edit_alt', $data);
    }

    public function update($id_alt)
    {
        Request()->validate([
            'id_alt'=> 'required|min:3|max:5',
            'nama_alt'=>'required',
            'alamat'=>'required',
            'kategori'=>'required',
            'gambar_alt'=>'mimes:webp,jpg,jpeg,png|max:1024',

        ],[
            'id_alt.required' => 'wajib diisi !!',
            'id_alt.min' => 'minimal 3 karakter',
            'id_alt.max' => 'maximal 5 karakter',
            'nama_alt.required' => 'wajib diisi !!',
            'alamat.required' => 'wajib diisi !!',
            'kategori.required' => 'wajib diisi !!',
        ]);

        if (Request()->gambar_alt <> ""){

            $file = Request()->gambar_alt;
        $fileName = Request()->id_alt . '.' . $file->extension();
        $file->move(public_path('gambar_alternatif'), $fileName);

        $data = [
            'id_alt' => Request()->id_alt,
            'nama_alt' => Request()->nama_alt,
            'alamat' => Request()->alamat,
            'kategori' => Request()->kategori,
            'gambar_alt' => $fileName,
        ];

        $this->alternatifModel->editData($id_alt, $data);

        } else{
            $data = [
                'id_alt' => Request()->id_alt,
                'nama_alt' => Request()->nama_alt,
                'alamat' => Request()->alamat,
                'kategori' => Request()->kategori,
            ];
        }

        return redirect()->route('alternatif')->with('pesan', 'Data berhasil di tambahkan');
    }

    public function delete($id_alt)
    {
        $this->alternatifModel->deleteData($id_alt);
        return redirect()->route('alternatif')->with('pesan', 'Data berhasil di hapus');
    }

}