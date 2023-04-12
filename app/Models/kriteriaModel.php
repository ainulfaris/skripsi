<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class kriteriaModel extends Model
{
    
    public function allData(){
        return DB::table('tbl_kriteria')->get();
    }

    public function addData($data)
    {
        DB::table('tbl_kriteria')->insert($data);
    }
}
