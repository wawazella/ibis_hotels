<?php

namespace App\Http\Controllers;
use App\Models\datakamar;
use Illuminate\Http\Request;

class datakamarController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $datakamar = datakamar::all();
        return view('kamar.index', compact('datakamar'));
       
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('buat-datakamar');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {

        $data= new datakamar();
        

        if($request->validate){ 
        }
        $file= $request->file('gambar_kamar');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('public/gambar_kamar'), $filename);
        $data['nama_kamar']= $request->nama_kamar;
        $data['gambar_kamar']= $filename;
        $data['Deskripsi_kamar']= $request->Deskripsi_kamar;
        $data['harga']= $request->harga;
       
     
       
        
        $data->save();


        return redirect()->route('datakamar.index')->with('success','datakamar has been created successfully.');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\datakamar  $datakamar
    * @return \Illuminate\Http\Response
    */
    public function show(datakamar $datakamar)
    {
        return view('datakamar.show',compact('datakamar'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\datakamar  $datakamar
    * @return \Illuminate\Http\Response
    */
    public function edit(datakamar $datakamar)
    {
        return view('edit-datakamar',compact('datakamar'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\datakamar  $datakamar
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, datakamar $datakamar)
    {
        $request->validate([
            'nama_kamar' => 'required',
            'harga' => 'required',
            'Deskripsi_kamar' => 'required',
        ]);

        if($request->file('gambar_kamar')){
            $file= $request->file('gambar_kamar');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/gambar_kamar'), $filename);
            $request['gambar_kamar'] = $filename;
        }

       
        
        $datakamar->fill($request->post())->save();

        return redirect()->route('datakamar.index')->with('success','datakamar Has Been updated successfully');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\datakamar  $datakamar
    * @return \Illuminate\Http\Response
    */
    public function destroy(datakamar $datakamar)
    {
        $datakamar->delete();
        return redirect()->route('datakamar.index')->with('success','datakamar has been deleted successfully');
    }

    public function kamar()
    {
        $datakamar = datakamar::orderBy('id','desc')->get();
        return view('category', compact('datakamar'));
    }
}
