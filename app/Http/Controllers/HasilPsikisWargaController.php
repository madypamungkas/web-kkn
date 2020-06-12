<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HasilPendataanWarga;
use App\HasilSkor;
use Carbon\Carbon;
use App\Padukuhan;

use App\Exports\SkalaKesehatanExport;
use Maatwebsite\Excel\Facades\Excel;
class HasilPsikisWargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('hasil-psikis.index');
    }

    public function getData(Request $request)
    {
        $data = HasilPendataanWarga::with('warga')
                                ->whereHas('warga', function ($query) use ($request){
                                  if (!empty($request->rw)) {
                                    $query->whereIn('rw', [$request->rw]);
                                    if (!empty($request->rt)) {
                                      $query->whereIn('rt', [$request->rt]);
                                    }
                                  } elseif (!empty($request->rt)) {
                                    $query->whereIn('rt', [$request->rt]);
                                  }
                                })->get();
        return datatables()->of($data)->addColumn('action', function($row){
            $btn = '<button id="detail" class="btn border-warning btn-xs text-warning-600 btn-flat btn-icon"><i class="icon-eye"></i> Detail</button>';
            return $btn;
        })->addColumn('tanggal_pengisian', function($row){
          return Carbon::parse($row->created_at)->translatedFormat('j F Y');
        })
        ->addColumn('padukuhan',function($row){
          return Padukuhan::find($row->warga->padukuhan_id)->name;
        })
        ->rawColumns(['action','tanggal_pengisian'])
        ->addIndexColumn()
        ->make(true);
    }

    public function export(Request $request)
     {
           $rw = '';
           $rt = '';
          if ($request->rw) {
            $rw = $request->rw;
          }
          if ($request->rt) {
            $rt = $request->rt;
          }
         $data = HasilPendataanWarga::leftJoin('wargas', 'hasil_pendataan_warga.warga_id', '=', 'wargas.id')
                                      ->leftJoin('jawabanwargas','hasil_pendataan_warga.uniq_pengisian','=','jawabanwargas.uniq_pengisian')
                                      ->leftJoin('padukuhan', 'padukuhan.id', '=', 'wargas.padukuhan_id')
                                      ->leftJoin('pertanyaans', 'pertanyaans.id', '=', 'jawabanwargas.pertanyaan_id')

           ->when($rw, function ($query, $rw) {
               return $query->where('wargas.rw', $rw);
             })
           ->when($rt, function ($query, $rt) {
               return $query->where('wargas.rt', $rt);
             })
           ->select('hasl_pendataan_warga.tanggal_pendataan','wargas.nik', 'wargas.nama','wargas.no_telepon','wargas.jenis_kelamin','wargas.tanggal_lahir','padukuhan.name','wargas.rw','wargas.rt','pertanyaans.pertanyaan','jawabanwargas.jawaban')
           ->orderBy('wargas.nama')->get();
         if ($rw) {
           if ($rt) {
             return Excel::download(new SkalaKesehatanExport($data,$rw,$rt), 'Rekap Pendataan Dampak Covid-19 RW '.$rw.' RT '.$rt.'.xlsx');
           }
           return Excel::download(new SkalaKesehatanExport($data,$rw,$rt), 'Rekap Pendataan Dampak Covid-19 RW '.$rw.'.xlsx');
         } else {
           if ($rt) {
             return Excel::download(new SkalaKesehatanExport($data,$rw,$rt), 'Rekap Pendataan Dampak Covid-19 RT '.$rt.'.xlsx');
           }
           return Excel::download(new SkalaKesehatanExport($data,$rw,$rt), 'Rekap Pendataan Dampak Covid-19 Rejowinangun.xlsx');
         }
     }
}
