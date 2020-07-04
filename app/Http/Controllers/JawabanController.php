<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;
use App\Models\PertanyaanModel;

class JawabanController extends Controller
{
    public function index($id_pertanyaan){
        $jawaban = JawabanModel::find_by_id($id_pertanyaan);
        $pertanyaan = PertanyaanModel::find_by_id($id_pertanyaan);
        return view('jawaban.index', compact('jawaban', 'pertanyaan'));
    }

    public function store($id_pertanyaan,Request $request){
        $jawab = $request->all();
        $jawab['id_pertanyaan'] = $id_pertanyaan;
        $jawab['tanggal_dibuat'] = '2020/07/04';
        $jawab['tanggal_diperbarui'] = '2020/07/07';
        unset($jawab["_token"]);
        JawabanModel::save($jawab);
        redirect('/jawaban');
    }

}
