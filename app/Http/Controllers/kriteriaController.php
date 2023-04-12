<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kriteriaModel;

class kriteriaController extends Controller
{
    public function __construct(){
        $this->kriteriaModel = new kriteriaModel();
        
    }
    public function index(){
        $data = [
            'kriteria' => $this->kriteriaModel->allData(),
        ];
        return view('v_kriteria', $data);
    }


    public function add()
    {
        return view('v_add_krt');
    }

    public function insert()
    {
        Request()->validate([
            'id_krt'=> 'required|unique:tbl_kriteria,id_alt|min:3|max:5',
            'nama_krt'=>'required',

        ],[
            'id_krt.required' => 'wajib diisi !!',
            'id_krt.unique' => 'kode ini sudah ada',
            'id_krt.min' => 'minimal 3 karakter',
            'id_krt.max' => 'maximal 5 karakter',
            'namakrt.required' => 'wajib diisi !!',
        ]);

        $data = [
            'id_krt' => Request()->id_krt,
            'nama_krt' => Request()->nama_krt,
        ];

        $this->kriteriaModel->addData($data);
        return redirect()->route('kriteria')->with('pesan', 'Data berhasil di tambahkan');
    }
}
