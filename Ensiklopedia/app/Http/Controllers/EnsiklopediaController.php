<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ensiklopedia;

class EnsiklopediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$ensiklopedias = Ensiklopedia::orderBy('id', 'DESC')->paginate(100);
        return view('ensiklopedia.index', compact('ensiklopedias'));
    
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	return view('ensiklopedia.create');
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
        $this->validate($request, [
            'istilah' => 'required',
            'kategori' => 'required',
            'arti' => 'required'

        ]);

        $ensiklopedia = Ensiklopedia::create($request->all());

        return redirect()->route('ensiklopedia.index')->with('message', 'Ensiklopedia berhasil dibuat!');
    
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    	$ensiklopedia = Ensiklopedia::findOrFail($id);
        return view('ensiklopedia.show', compact('ensiklopedia'));
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
    	$ensiklopedia = Ensiklopedia::findOrFail($id);
        return view('Ensiklopedia.edit', compact('ensiklopedia'));
    
        //
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
    	$this->validate($request, [
            'istilah' => 'required',
            'kategori' => 'required',
            'arti' => 'required'

        ]);

        $ensiklopedia = Ensiklopedia::findOrFail($id)->update($request->all());

        return redirect()->route('ensiklopedia.index')->with('message', 'Ensiklopedia berhasil diubah!');
   
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	$ensiklopedia = Ensiklopedia::findOrFail($id)->delete();
        return redirect()->route('ensiklopedia.index')->with('message', 'Ensiklopedia berhasil dihapus!');
 
        //
    }
}
