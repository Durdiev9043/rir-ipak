<?php

namespace App\Http\Controllers;

use App\Models\klaster;
use App\Models\Region;
use App\Models\Staff;
use Illuminate\Http\Request;

class KlasterController extends Controller
{

    public function index()
    {
        $klasteres=Klaster::all();
        $regions=Region::all();
        $staffs=Staff::all();
        return view('admin.klaster.index',['klasteres'=>$klasteres,'staffs'=>$staffs,'regions'=>$regions]);
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
