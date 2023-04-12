<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class alternatifModel extends Model
{
    public function allData()
    {
        return DB::table('tbl_alternatif')->get();
    }

    public function detailData($id_alt)
    {
        return DB::table('tbl_alternatif')->where('id_alt', $id_alt)->first();
    }

    public function addData($data)
    {
        DB::table('tbl_alternatif')->insert($data);
    }

    public function editData($id_alt, $data){
        DB::table('tbl_alternatif')->where('id_alt', $id_alt)->update($data);
    }

    public function deleteData($id_alt){
        DB::table('tbl_alternatif')->where('id_alt', $id_alt)->delete();
    }
}
