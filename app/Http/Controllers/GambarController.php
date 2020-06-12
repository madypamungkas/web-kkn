<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use File;
use Storage;
use App\Gambar;
use Carbon\Carbon;

class GambarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('gambar.index');
    }

    public function getData(Request $request)
    {
        $data = Gambar::all();
        return datatables()->of($data)->addColumn('action', function($row){
            $btn = '<a href="'.route('gambar.edit',$row->id).'" class="btn border-info btn-xs text-info-600 btn-flat btn-icon"><i class="icon-pencil6"></i></a>';
            $btn = $btn.'  <button id="delete" class="btn border-warning btn-xs text-warning-600 btn-flat btn-icon"><i class="icon-trash"></i></button>';
            return $btn;
        })->addColumn('gambar', function($row){
          return "<img class='img-responsive' src=".asset("storage/images/$row->gambar")." alt='gambar' title='gambar' width='200'>";
        })
        ->rawColumns(['action','gambar'])
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
        return view('gambar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate(request(),
      [
          // 'gambar' => 'required|gt:nilai_batas_bawah'
      ]
      );

      $gambar = new Gambar();
      $gambar->tipe = $request->tipe;
      $gambar->judul_file = $request->judul_file;
      $gambar->deskripsi = $request->deskripsi;
      $gambar->url = $request->url;
      $gambar->created_by = Auth::user()->id;
    //   $file = $request->file('gambar');
    //   $extension = strtolower($file->getClientOriginalExtension());
    //   $filename = Carbon::now()->format('ymd').rand(1000,9999) . '.' . $extension;
    //   Storage::put('public/images/' . $filename, File::get($file));
    //   $gambar->gambar = $filename;
      $gambar->save();

      return redirect()->route('gambar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Gambar::find($id);
        return view('gambar.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data = Gambar::find($id);
        $data->tipe = $request->tipe;
        $data->judul_file = $request->judul_file;
        $data->deskripsi = $request->deskripsi;
        $data->url = $request->url;
        // if (!empty($data->gambar)) {
        //   Storage::delete('public/images/'.$data->gambar);
        // }
        // $file = $request->file('gambar');
        // $extension = strtolower($file->getClientOriginalExtension());
        // $filename = Carbon::now()->format('ymd').rand(1000,9999) . '.' . $extension;
        // Storage::put('public/images/' . $filename, File::get($file));
        // $data->gambar = $filename;
        $data->save();
        return redirect()->route('gambar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Gambar::find($id);
        // if (!empty($data->gambar)) {
        //   Storage::delete('public/images/'.$data->gambar);
        // }
        $data->delete();
        return response()->json(['data'=>'success delete data']);
    }

    public function cariGambar(Request $request)
    {
        $query = $request->get('query');
        $query = str_replace(" ", "%", $query);
        $gambar = Gambar::where('tipe','gambar')->orderByDesc('created_at')->paginate(3);
        foreach ($gambar as $key => $value) {
            $url = explode('/',$value->url);
            $value->url = 'https://drive.google.com/uc?id='.$url[5].'&export=download';          
        }
        return view('warga.list-gambar', compact('gambar'))->render();
    }

    public function cariVideo(Request $request)
    {
        $query = $request->get('query');
        $query = str_replace(" ", "%", $query);
        $video = Gambar::where('tipe','video')->orderByDesc('created_at')->paginate(3);
        return view('warga.list-video', compact('video'))->render();
    }
}
