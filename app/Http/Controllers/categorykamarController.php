<?php

namespace App\Http\Controllers;
use App\Models\datakamar;
use App\Models\categorykamar;
use Illuminate\Http\Request;

class categorykamarController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $categorykamar = categorykamar::orderBy('id','desc')->paginate(5);
        return view('categorykamar', compact('categorykamar'));
       
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('buat-categorykamar');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {

       
        $data= new categorykamar();

        if($request->validate){ 
        }
        $file= $request->file('gambar_kamar');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('public/gambar_kamar'), $filename);
        // $data['image']= $filename;
        $data['kd_kamar']= $request->kd_kamar;
        $data['nama_kamar']= $request->nama_kamar;
        $data['gambar_kamar']= $filename;
      
       
     
       
        
        $data->save();


        return redirect()->route('categorykamar.index')->with('success','categorykamar has been created successfully.');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\categorykamar  $categorykamar
    * @return \Illuminate\Http\Response
    */
    public function show(categorykamar $categorykamar)
    {
        return view('categorykamar.show',compact('categorykamar'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\categorykamar  $categorykamar
    * @return \Illuminate\Http\Response
    */
    public function edit(categorykamar $categorykamar)
    {
        return view('edit-categorykamar',compact('categorykamar'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\categorykamar  $categorykamar
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, categorykamar $categorykamar)
    {
        $request->validate([
            'kd_kamar' => 'required',
            'nama_kamar' => 'required',
           
        ]);

        if($request->file('gambar_kamar')){
            $file= $request->file('gambar_kamar');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/gambar_kamar'), $filename);
            $request['gambar_kamar'] = $filename;
        }

     
        
        $categorykamar->fill($request->post())->save();

        return redirect()->route('categorykamar.index')->with('success','categorykamar Has Been updated successfully');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\categorykamar  $categorykamar
    * @return \Illuminate\Http\Response
    */
    public function destroy(categorykamar $categorykamar)
    {
        $categorykamar->delete();
        return redirect()->route('categorykamar.index')->with('success','categorykamar has been deleted successfully');
    }
}
