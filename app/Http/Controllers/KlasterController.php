<?php

namespace App\Http\Controllers;

use App\Models\klaster;
use Illuminate\Http\Request;

class KlasterController extends Controller
{
  
    public function index()
    {
        $klasteres=Klaster::all();
        return view('admin.klaster.index',['klasteres'=>$klasteres]);
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $klaster=Klaster::create($request->all());
        return redirect()->route('admin.klaster.index');
    }

   
    public function show($id)
    {
        //
    }

    public function edit(Klaster $klaster)
    {
        return view('admin.klaster.edit',['klaster'=>$klaster]);
    }

    public function update(Request $request, Klaster $klaster)
    {
        $klaster->update($request->all());
        return redirect()->route('admin.klaster.index');       
    }

    public function destroy(Klaster $klaster)
    {
        $klaster->delete();
        return redirect()->back();
    }
}
