<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CityMun;
use App\Models\Province;
use Illuminate\Support\Facades\DB;

class CityMunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $province = province::all();
            
        $citymun = citymun::orderby('citymun_description', 'asc')->simplePaginate(5);
        
        return view('citymun.index')->with('citymun', $citymun);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $province = province::all();
        $province = DB::table("province_tbl")
        ->get();

        // return view('citymun.create');
        return view('citymun.create')->with('province', $province );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        citymun::create($input);

        return redirect('citymun');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $citymun = citymun::all();
        return view('citymun.index')->with('citymun', $citymun);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $updateCitymun = citymun::find($id);
        return view('citymun.edit')->with('citymun', $updateCitymun);
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
        $updateCitymun = citymun::find($id);
        $input = $request->all();
        $updateCitymun->update($input);
        return redirect('citymun');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        citymun::destroy($id);
        return redirect('citymun');
    }
}
