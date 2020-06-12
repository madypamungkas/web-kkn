<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Warga;
use DB;
use App\Padukuhan;
use App\Exports\PerserbaranPemudikExport;
use Maatwebsite\Excel\Facades\Excel;
class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.index');
    }

    public function getData(Request $request)
    {
        $rw = $request->rw;
        $rt = $request->rt;
        $data = Warga::whereNotNull('perantau_id')
                       ->select(DB::raw('count(padukuhan_id) as jumlah, padukuhan_id'))
                       ->groupBy('padukuhan_id')
                       ->get();
        return datatables()->of($data)
        ->addIndexColumn()
        ->addColumn('action', function($row){
          $btn = '<a href="'.route('dashboard.show',$row->padukuhan_id).'" class="btn border-info btn-xs text-info-600 btn-flat btn-icon"><i class="icon-eye"></i></a>';
          return $btn;
        })
        ->addColumn('padukuhan',function($data){
          return Padukuhan::find($data->padukuhan_id)->name;
        })
        ->rawColumns(['action'])
        ->make(true);
    }

    public function getDataShow(Request $request,$id)
    {
        $data = Warga::with('perantau')->whereNotNull('perantau_id')
                       ->where('padukuhan_id',$id)
                       ->orderBy('rw')
                       ->orderBy('rt')
                       ->get();
        return datatables()->of($data)
        ->addIndexColumn()
        ->make(true);
    }

    public function export(Request $request)
     {
        $data = Warga::leftJoin('perantau', 'perantau.id', '=', 'wargas.perantau_id')
          ->leftJoin('padukuhan', 'padukuhan.id', '=', 'wargas.padukuhan_id')
          ->whereNotNull('wargas.perantau_id')
          ->select('wargas.nik','wargas.nama','wargas.no_telepon','padukuhan.name','wargas.rw','wargas.rt','perantau.tanggal_pulang')
          ->get();
          return Excel::download(new PerserbaranPemudikExport($data), 'Persebaran Pemudik Rejowinangun.xlsx');
     }

     public function show($id) {
       $padukuhan_id = $id;
       $data = Padukuhan::find($id);
       return view('dashboard.detail',compact('padukuhan_id','data'));
     }
}
