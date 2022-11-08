<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeProperties;
class HomePropertiesController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $HomeProperties = HomeProperties::orderBy('id', 'desc')->simplePaginate(2);
          return view('HomeProperties.index')->with('HomeProperties', $HomeProperties);
        //  $HomeProperties = HomeProperties::all();
        // return view('HomeProperties.index')->with('HomeProperties', $HomeProperties);
        // to get all information of HomePRoperties tbl
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('HomeProperties.index');
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
        HomeProperties::create($input);
        return redirect('HomeProperties.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $singleHomeProperties = HomeProperties::find($id);
        // return view('HomeProperties.show')->width('HomeProperties', $singleHomeProperties)
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
        $updateHomeProperties = HomeProperties::find($id);
        $input = $request->all;
        $updateHomeProperties->update($input);

        return redirect('HomeProperties');
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
