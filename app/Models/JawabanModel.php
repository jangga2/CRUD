<?php


namespace App\Models;
use Illuminate\Support\Facades\DB;

class JawabanModel{
    public static function get_all(){
        $jawaban = DB::table('jawaban')->get();
        return $jawaban;
    }

    public static function find_by_id($id_pertanyaan){
        $jawaban = DB::table('jawaban')->where('id_pertanyaan', $id_pertanyaan)->get();
        return $jawaban;
    }

    public static function save($jawab){
        $new_jawaban = DB::table('jawaban')->insert($jawab);
        return $new_jawaban;
    }
}

?>