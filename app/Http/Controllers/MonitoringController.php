<?php

namespace App\Http\Controllers;

use App\Monitoring;
use Illuminate\Http\Request;
use App\Models\Province;
use App\Warga;
use App\HasilSkriningWarga;
use Carbon\Carbon;
use App\Padukuhan;

use App\Exports\ScreeningCovdiExport;
use Maatwebsite\Excel\Facades\Excel;

class MonitoringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provinsi = Province::all();
        return view('monitoring.index',compact('provinsi'));
    }

    public function getData(Request $request)
    {
        $rw = $request->rw;
        $rt = $request->rt;
        $padukuhan = $request->padukuhan;
        $data = Warga::when($rw, function ($query, $rw) {
                          return $query->where('rw', $rw);
                        })
                      ->when($rt, function ($query, $rt) {
                          return $query->where('rt', $rt);
                        })
                      ->when($padukuhan, function ($query, $padukuhan) {
                        return $query->where('padukuhan_id', $padukuhan);
                      })
                        // ->where('province_id',$provinsi)->where('regency_id',$kabupaten)
                        // ->where('district_id',$kecamatan)->where('village_id',$kelurahan)
                      ->get();
        return datatables()->of($data)->addColumn('action', function($row){
            $btn = '<a href="'.route('monitoring.show',$row->id).'" class="btn border-info btn-xs text-info-600 btn-flat btn-icon"><i class="icon-eye"></i></a>';
            return $btn;
        })->addColumn('kependudukan', function($row){
            if (!empty($row->perantau_id)) {
              // return 'Perantau ('+$row->perantau->kabupaten->name+')';
              return $row->perantau->kabupaten->name;
            } else {
              return $row->status_kependudukan;
            }
        })
        ->addColumn('padukuhan',function($row){
          return Padukuhan::find($row->padukuhan_id)->name;
        })
        ->rawColumns(['action','kependudukan'])
        ->addIndexColumn()
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Monitoring  $monitoring
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $data = Warga::find($id);
      return view('monitoring.detail',compact('data'));
    }
    public function getDataShow($id)
    {
      $data = HasilSkriningWarga::with('hasil_skors')->where('warga_id',$id)->get();
      return datatables()->of($data)->addColumn('tanggal_pengisian', function($row){
        return Carbon::parse($row->created_at)->translatedFormat('j F Y');
      })
      ->rawColumns(['tanggal_pengisian'])
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
        if ($request->padukuhan) {
          $padukuhan = $request->padukuhan;
        }
        $data = Warga::leftJoin('perantau', 'perantau.id', '=', 'wargas.perantau_id')
          ->leftJoin('indoregion_regencies', 'indoregion_regencies.id', '=', 'perantau.regency_id')
          ->leftJoin('padukuhan', 'padukuhan.id', '=', 'wargas.padukuhan_id')
          ->leftJoin('hasil_skrining_warga','hasil_skrining_warga.warga_id','=','wargas.id')
          ->leftJoin('hasil_skors','hasil_skors.id','=','hasil_skrining_warga.hasil_skors_id')
          // ->when($rw, function ($query, $rw)
          //   {
          //     return $query->where('rw', $rw);
          //   })
          // ->when($rt, function ($query, $rt) {
          //     return $query->where('rt', $rt);
          //   })
          // ->when($padukuhan, function ($query, $padukuhan) {
          //   return $query->where('padukuhan_id', $padukuhan);
          // })
         ->select('wargas.nik','wargas.nama','wargas.no_telepon','wargas.jenis_kelamin','wargas.tanggal_lahir','padukuhan.name','wargas.rw','wargas.rt','wargas.status_kependudukan as kependudukan','indoregion_regencies.name as asal','hasil_skrining_warga.tanggal_skrining','hasil_skors.hasil')
         ->get();
        
       if ($rw) {
         if ($rt) {
           return Excel::download(new ScreeningCovdiExport($data,$rw,$rt), 'Rekap Skrining Covid RW '.$rw.' RT '.$rt.'.xlsx');
         }
         return Excel::download(new ScreeningCovdiExport($data,$rw,$rt), 'Rekap Skrining Covid RW '.$rw.'.xlsx');
       } else {
         if ($rt) {
           return Excel::download(new ScreeningCovdiExport($data,$rw,$rt), 'Rekap Skrining Covid RT '.$rt.'.xlsx');
         }
         return Excel::download(new ScreeningCovdiExport($data,$rw,$rt), 'Rekap Skrining Covid REJOWINANGUN.xlsx');
       }
     }
}
