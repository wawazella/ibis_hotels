<?php

namespace App\Http\Controllers;
use App\Models\Fasilitas;
use Illuminate\Http\Request;

class fasilitasController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $fasilitas = Fasilitas::orderBy('id','desc')->paginate(5);
        return view('fasilitas', compact('fasilitas'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('buat-fasilitas');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {

        $data= new Fasilitas();

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $data['image']= $filename;
            $data['kd_fasilitas']= $request->kd_fasilitas;
            $data['wifi']= $request->wifi;
            $data['ukuran_kasur']= $request->ukuran_kasur;
            $data['jumlah_kasur']= $request->jumlah_kasur;
        }

       
        // $request->validate([
        //     'kd_kamar' => 'required',
        //     'kd_tipe' => 'required',
        //     'kd_lantai' => 'required',
        //     'kd_fasilitas' => 'required',
        // ]);
        
        $data->save();


        return redirect()->route('fasilitas.index')->with('success','fasilitas has been created successfully.');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\fasilitas  $fasilitas
    * @return \Illuminate\Http\Response
    */
    public function show(fasilitas $fasilitas)
    {
        return view('fasilitas.show',compact('fasilitas'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Fasilitas  $fasilitas
    * @return \Illuminate\Http\Response
    */
    public function edit(fasilitas $fasilitasr)
    {
        return view('edit-fasilitas',compact('fasilitas'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\fasilitas  $fasilitas
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, fasilitas $fasilitas)
    {
        $request->validate([
            'kd_fasilitas' => 'required',
            'wifi' => 'required',
            'ukuran_kasur' => 'required',
            'jumlah_kasur' => 'required',
        ]);

        if($request->file('image')){
            $file= $request->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $request['image'] = $filename;
        }
        
        $fasilitas->fill($request->post())->save();

        return redirect()->route('fasilitas.index')->with('success','fasilitas Has Been updated successfully');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Fasilitas $datakamar
    * @return \Illuminate\Http\Response
    */
    public function destroy(fasilitas $fasilitas)
    {
        $fasilitas->delete();
        return redirect()->route('fasilitas.index')->with('success','datakamar has been deleted successfully');
    }
}
