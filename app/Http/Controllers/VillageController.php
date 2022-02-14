<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\Staff;
use App\Models\Village;
use Illuminate\Http\Request;

class VillageController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {$regions=Region::all();
        return view('admin.village.create',['regions'=>$regions]);
    }


    public function store(Request $request)
    {
        $village=new Village();
        $village->create($request->all());
        return redirect()->route('admin.region.index');
    }


    public function show($id)
    {
        $staffes=Staff::all()->where('village_id','=',$id);
        dd($staffes);
        return view('admin.staff.index',['staffes'=>$staffes]);
    }


    public function edit(Village $village)
    {
        return view('admin.village.edit',['village'=>$village]);
    }


    public function update(Request $request,Village $village)
    {
        $village->update($request->all());
        return redirect()->route('admin.region.index');
    }


    public function destroy(Village $village)
    {
        $village->delete();
        return redirect()->back();
    }
}
