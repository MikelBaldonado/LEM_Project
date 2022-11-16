<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\properties;
use App\Models\province;
use Illuminate\Support\Facades\DB;

class PropertyListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $properties = DB::table("properties_tbl")
        $properties = properties::orderBy("province_description", "asc")
        ->leftJoin("province_tbl", "properties_tbl.property_province_id", "=", "province_tbl.province_id")
        ->leftJoin("city_municipality_tbl", "properties_tbl.city_mun_id", "=", "city_municipality_tbl.city_mun_id")
        // ->leftJoin("image_tbl", "property_image_id", "=", "image_tbl.image_id")
        ->leftJoin("images", "property_image_id", "=", "images.id")
        // ->orderBy("province_description", "asc")
        // ->get()
        ->simplePaginate(4);
        // return view('properties.index')->with('properties', $properties);

        // province_tbl query
        $province = DB::table("province_tbl")
        ->orderBy("province_description", "asc")
        ->get();

        //City_Municipality_tbl query
        $citymunicipality = DB::table("city_municipality_tbl")
        ->orderBy("city_mun_description", "asc")
        ->get();

        $data = [
            'properties' => $properties,
            'province' => $province,
            'citymunicipality' =>$citymunicipality,
            // 'filterprovince' =>$filterprovince
        ];
        return view('propertieslist.index')->with($data);
        // return view('properties.index')->with($data);

    }

    // public function showAdminIndex()
    // {
    //     $properties = properties::orderby('property_description', 'asc')->simplePaginate(5);        
    //     return view('propertiesShow.index')->with('properties', $properties);
    // }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('propertieslist.create');
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
        properties::create($input);

        // this must be inserter so return view will return with data
        $properties = DB::table("properties_tbl")
        ->leftJoin("province_tbl", "properties_tbl.property_province_id", "=", "province_tbl.province_id")
        ->leftJoin("city_municipality_tbl", "properties_tbl.city_mun_id", "=", "city_municipality_tbl.city_mun_id")
        // ->leftJoin("image_tbl", "property_image_id", "=", "image_tbl.image_id")
        ->leftJoin("images", "property_image_id", "=", "images.id")
        ->orderBy("province_description", "asc")
        ->get();
        // return view('properties.index')->with('properties', $properties);

        // province_tbl query
        $province = DB::table("province_tbl")
        ->orderBy("province_description", "asc")
        ->get();

        //City_Municipality_tbl query
        $citymunicipality = DB::table("city_municipality_tbl")
        ->orderBy("city_mun_description", "asc")
        ->get();

        $data = [
            'properties' => $properties,
            'province' => $province,
            'citymunicipality' =>$citymunicipality,
            // 'filterprovince' =>$filterprovince
        ];
        return view('propertieslist.index')->with($data);
        // return view('properties.index')->with($data);
        //redirect to the properties will not work even if the file propertiesList is indicated.
        // return redirect('properties.propertieslist');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $properties = properties::all();
        return view('propertieslist.index')->with('properties', $properties);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $properties = properties::find($id);
        //using the find() method to access Model won't work, hence the below code is used.
        $property = DB::table("properties_tbl")
        ->where("property_id", "=", $id)
        ->first();

        // $province = province::orderby('province_description', 'asc');
        // $data = ['properties' => $property, ];
        // $data = ['properties' => $property, 'province' => $province];
        return view('propertieslist.edit')->with('properties', $property);
        // return view('propertieslist.edit');
        // return view('propertieslist.edit')->with('province', $province);
        // return view('propertieslist.edit')->with('properties', $data);
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
        // $updateProperties = properties::find($id);
        // $input = $request->all();
        // $updateProperties->update($input);
        // $input = $request->all();

        $updateproperties = DB::table("properties_tbl")
        ->where("property_id", "=", $id)
        // ->first();
        ->limit(1);
        // $input = $request->all();
        $input = $request->except(['_token', '_method']);
        $updateproperties->update($input);
        return redirect()->route('propertylist.index');
        // return redirect('propertieslist');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        properties::destroy($id);
        return redirect('propertieslist.index');
    }
}
