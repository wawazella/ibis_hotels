<?php

namespace App\Http\Controllers;
use App\Models\Tipe;
use Illuminate\Http\Request;
use App\Models\datakamar;

class tipeController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $tipe = Tipe::orderBy('id','desc')->paginate(5);
        return view('tipe', compact('tipe'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('buat-tipe');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {

        $data= new Tipe();

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['image']= $filename;
            $data['kd_tipe']= $request->kd_tipe;
            $data['tipe_kamar']= $request->tipe_kamar;
           
        }
        // $request->validate([
        //     'kd_kamar' => 'required',
        //     'kd_tipe' => 'required',
        //     'kd_lantai' => 'required',
        //     'kd_fasilitas' => 'required',
        // ]);
        
        $data->save();


        return redirect()->route('tipe.index')->with('success','tipe has been created successfully.');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\tipe  $datakamar
    * @return \Illuminate\Http\Response
    */
    public function show(tipe $tipe)
    {
        return view('tipe.show',compact('tipe'));
    }
       
    

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Tipe  $tipe
    * @return \Illuminate\Http\Response
    */
    public function edit(tipe $tipe)
    {
        return view('edit-tipe',compact('tipe'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\tipe  $lantai
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, tipe $tipe)
    {
        $request->validate([
            'kd_tipe' => 'required',
            'nama_tipe' => 'required',
           
        ]);

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $request['image'] = $filename;
        }
        
        $tipe->fill($request->post())->save();

        return redirect()->route('tipe.index')->with('success','tipe Has Been updated successfully');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Tipe  $lantai
    * @return \Illuminate\Http\Response
    */
    public function destroy(tipe $tipe)
    {
        $tipe->delete();
        return redirect()->route('tipe.index')->with('success','tipe has been deleted successfully');
    }

    public function kamar()
    {
        $datakamar = datakamar::orderBy('id','desc')->get();
        return view('category', compact('datakamar'));
    }

    public function detailKamar($id)
    {
        $datakamar = datakamar::where('id',$id)->first();
        return view('service', compact('datakamar'));
    }
}
