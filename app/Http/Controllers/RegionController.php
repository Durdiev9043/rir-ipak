<?php

namespace App\Http\Controllers;

use App\Models\Farm;
use App\Models\klaster;
use App\Models\Staff;
use App\Models\Village;
use Illuminate\Http\Request;
use App\Models\Region;
use Illuminate\Support\Facades\DB;
use function GuzzleHttp\Promise\all;

class RegionController extends Controller
{

    public function index()
    {
        $regions=Region::all();
        $staffes=Staff::all();
        $farmes=Farm::all();
        return view('admin.region.index',['regions'=>$regions,'farmes'=>$farmes,'staffes'=>$staffes]);
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
