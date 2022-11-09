<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Properties;
use Illuminate\Support\Facades\DB;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    public function index(Request $request)
    {
        // $properties = properties::orderby('property_description', 'asc')->simplePaginate(5);        
        // return view('properties.index')->with('properties', $properties);


        $filterprovince = $request->province;
        $properties = DB::table("properties_tbl")
            ->leftJoin("province_tbl", "properties_tbl.property_province_id", "=", "province_tbl.province_id")
            ->leftJoin("city_municipality_tbl", "properties_tbl.city_mun_id", "=", "city_municipality_tbl.city_mun_id")
            ->leftJoin("image_tbl", "property_image_id", "=", "image_tbl.image_id")
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
                'filterprovince' =>$filterprovince
            ];
            return view('propertiesShow.index')->with($data);

    }

    public function showAdminIndex() {
        $properties = properties::orderby('property_description', 'asc')->simplePaginate(5);        
        return view('properties.index')->with('properties', $properties);
    }


// Function for searching properties
public function search(Request $request)
{
    $input = $request->all();
    $filter_province = $request->province;
    $filter_citymun =  $request->citymun;
    $filter_pricerange =$request->price;
    settype($filter_pricerange, "integer");
    // $filter_province = $request->province;
    // $filter_citymun =  $request->citymun;
    if ($filter_province && !$filter_citymun && !$filter_pricerange){
        $properties = DB::table("properties_tbl")
        ->leftJoin("province_tbl", "properties_tbl.property_province_id", "=", "province_tbl.province_id")
        ->leftJoin("city_municipality_tbl", "properties_tbl.city_mun_id", "=", "city_municipality_tbl.city_mun_id")
        ->leftJoin("image_tbl", "property_image_id", "=", "image_tbl.image_id")
        ->leftJoin("images", "property_image_id", "=", "images.id")
        ->where('properties_tbl.property_province_id', '=', $filter_province)
        // ->where('properties_tbl.city_mun_id', '=', $filter_citymun)
        ->orderBy("province_description", "asc")
        ->get();
        // return view('properties.index')->with('properties', $properties);

        // province_tbl query
        $province = DB::table("province_tbl")
        // ->where('province_id', '=', $filter_province)
        ->orderBy("province_description", "asc")
        ->get();

        //City_Municipality_tbl query
        $citymunicipality = DB::table("city_municipality_tbl")
        ->where('province_id', '=', $filter_province)
        ->orderBy("city_mun_description", "asc")
        ->get();

    }else if ($filter_citymun && !$filter_province && !$filter_pricerange){
        $properties = DB::table("properties_tbl")
        ->leftJoin("province_tbl", "properties_tbl.property_province_id", "=", "province_tbl.province_id")
        ->leftJoin("city_municipality_tbl", "properties_tbl.city_mun_id", "=", "city_municipality_tbl.city_mun_id")
        ->leftJoin("image_tbl", "property_image_id", "=", "image_tbl.image_id")
        ->leftJoin("images", "property_image_id", "=", "images.id")
        // ->where('properties_tbl.property_province_id', '=', $filter_province)
        ->where('properties_tbl.city_mun_id', '=', $filter_citymun)
        ->orderBy("province_description", "asc")
        ->get();
        // return view('properties.index')->with('properties', $properties);

        // province_tbl query
        $province = DB::table("province_tbl")
        // ->leftJoin("city_municipality_tbl", "city_municipality_tbl.province_id", "=", "province_tbl.province_id")
        // ->where('city_mun_id', '=', $filter_citymun)
        ->orderBy("province_description", "asc")
        ->get();

        //City_Municipality_tbl query
        $citymunicipality = DB::table("city_municipality_tbl")
        // ->where('province_id', '=', $filter_province)
        ->orderBy("city_mun_description", "asc")
        ->get();
    
    }else if ($filter_pricerange && !$filter_citymun && !$filter_province){
        switch($filter_pricerange) {
                case 20000000:
                $properties = DB::table("properties_tbl")
                ->leftJoin("province_tbl", "properties_tbl.property_province_id", "=", "province_tbl.province_id")
                ->leftJoin("city_municipality_tbl", "properties_tbl.city_mun_id", "=", "city_municipality_tbl.city_mun_id")
                ->leftJoin("image_tbl", "property_image_id", "=", "image_tbl.image_id")
                ->leftJoin("images", "property_image_id", "=", "images.id")
                ->where('properties_tbl.property_price', '>=', $filter_pricerange)
                ->orderBy("province_description", "asc")
                ->get();
                break;

                case 10000000:
                $properties = DB::table("properties_tbl")
                ->leftJoin("province_tbl", "properties_tbl.property_province_id", "=", "province_tbl.province_id")
                ->leftJoin("city_municipality_tbl", "properties_tbl.city_mun_id", "=", "city_municipality_tbl.city_mun_id")
                ->leftJoin("image_tbl", "property_image_id", "=", "image_tbl.image_id")
                ->leftJoin("images", "property_image_id", "=", "images.id")
                ->where([['properties_tbl.property_price', '>', $filter_pricerange], ['properties_tbl.property_price', '<', 20000000],])
                ->orderBy("province_description", "asc")
                ->get();
                break;

                case 9999999:
                $properties = DB::table("properties_tbl")
                ->leftJoin("province_tbl", "properties_tbl.property_province_id", "=", "province_tbl.province_id")
                ->leftJoin("city_municipality_tbl", "properties_tbl.city_mun_id", "=", "city_municipality_tbl.city_mun_id")
                ->leftJoin("image_tbl", "property_image_id", "=", "image_tbl.image_id")
                ->leftJoin("images", "property_image_id", "=", "images.id")
                ->where('properties_tbl.property_price', '<', 10000000)
                ->orderBy("province_description", "asc")
                ->get();
                break;

                 default:
                 break;
            }
        $province = DB::table("province_tbl")
        ->orderBy("province_description", "asc")
        ->get();

        //City_Municipality_tbl query
        $citymunicipality = DB::table("city_municipality_tbl")
        // ->where('province_id', '=', $filter_province)
        ->orderBy("city_mun_description", "asc")
        ->get();

    }else{
        $properties = DB::table("properties_tbl")
        ->leftJoin("province_tbl", "properties_tbl.property_province_id", "=", "province_tbl.province_id")
        ->leftJoin("city_municipality_tbl", "properties_tbl.city_mun_id", "=", "city_municipality_tbl.city_mun_id")
        ->leftJoin("image_tbl", "property_image_id", "=", "image_tbl.image_id")
        ->leftJoin("images", "property_image_id", "=", "images.id")
        ->where('properties_tbl.property_province_id', '=', 
        $filter_province)
        ->where('properties_tbl.city_mun_id', '=', $filter_citymun)
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

    }
    

        $data = [
            'properties' => $properties,
            'province' => $province,
            'citymunicipality' =>$citymunicipality
        ];
        return view('propertiesShow.index')->with($data);
        // return view('properties.index')->with($data);
}

// Function for Select/Options for Province and City/Municipality
public function filter(Request $request)
{
    // $input = $request->all();
    $filter_province = $request->province;
    $properties = DB::table("properties_tbl")
        ->leftJoin("province_tbl", "properties_tbl.property_province_id", "=", "province_tbl.province_id")
        ->leftJoin("city_municipality_tbl", "properties_tbl.city_mun_id", "=", "city_municipality_tbl.city_mun_id")
        ->leftJoin("image_tbl", "property_image_id", "=", "image_tbl.image_id")
        ->leftJoin("images", "property_image_id", "=", "images.id")
        ->get();

        // province_tbl query
        $province = DB::table("province_tbl")
        ->where('province_id', '=', $filter_province)
        ->orderBy("province_description", "asc")
        ->get();

        //City_Municipality_tbl query
        $citymunicipality = DB::table("city_municipality_tbl")
        ->where('province_id', '=', $filter_province)
        ->orderBy("city_mun_description", "asc")
        ->get();

        $data = [
            'properties' => $properties,
            'filterprovince' => $filter_province,
            'province' => $province,
            'citymunicipality' =>$citymunicipality
        ];
        return view('propertiesShow.index')->with($data);
        
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('properties.create');
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

        return redirect('properties');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $property = properties::all();
        return view('properties.index')->with('properties', $property);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $updateProperties = properties::find($id);
        return view('properties.edit')->with('properties', $updateProperties);
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
        $updateProperties = properties::find($id);
        $input = $request->all();
        $updateProperties->update($input);
        return redirect('properties');
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
        return redirect('properties');

    }
}
