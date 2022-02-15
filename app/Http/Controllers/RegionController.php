<?php

namespace App\Http\Controllers;

use App\Models\klaster;
use App\Models\Staff;
use App\Models\Village;
use Illuminate\Http\Request;
use App\Models\Region;
use Illuminate\Support\Facades\DB;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regions=Region::all();
        $staffes=Staff::all();
        return view('admin.region.index',['regions'=>$regions,'staffes'=>$staffes]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $villages=Village::all()->where('region_id','=',$id);
        $staffes=Staff::all();
        return view('admin.village.index',['villages'=>$villages,'staffes'=>$staffes]);
    }

    public function edit(Region $region)
    {
        $klasters=klaster::all();
        return view('admin.region.edit',['region'=>$region,'klasters'=>$klasters]);
    }

    public function update(Request $request, Region $region)
    {
        $region->update($request->all());
        return redirect()->route('admin.region.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
