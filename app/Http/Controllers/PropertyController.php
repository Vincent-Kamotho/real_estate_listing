<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use App\Models\PropertySubtype;
use Illuminate\Support\Facades\DB;
use App\Models\PropertySubTypeHierarchy;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $propertyTypes = Property::all();
        return view('property_subtype_hierarchies')->with('propertyTypes', $propertyTypes);
    }

    public function listProperty()
    {
        $properties = PropertySubTypeHierarchy::all();
        return view('viewProperties')->with('properties', $properties);
        //return view('viewProperties', compact('properties'));
    }

    public function editProperty($id)
    {
        $properties = PropertySubTypeHierarchy::find($id);
        return view('editProperties')->with('properties' , $properties);
    }

    public function updateProperty(Request $request , $id)
    {
        $properties = PropertySubTypeHierarchy::find($id);
        $properties->property_subtype = $request->input('propertysubType');
        $properties->property_name = $request->input('propertyName');
        $properties->property_price = $request->input('propertyPrice');
        $properties->property_owner = $request->input('ownerName');
        $properties->update();
        return redirect('property')->with('success', 'Property Added Successfully');
    }

    public function deleteProperty($id)
    {
        $properties = PropertySubTypeHierarchy::find($id);
        $properties->delete();
        
        return redirect()->route('property')->with('success', 'Record Deleted Successfully');
    }

    public function listPropertyTypes()
    {
        $propertyTypes = Property::all();
        return view('viewPropertyTypes')->with('propertyTypes', $propertyTypes);
    }

    public function editPropertyTypes($id)
    {
        $propertyTypes = Property::find($id);
        return view('editPropertyTypes')->with('propertyTypes', $propertyTypes);
    }


    public function updatePropertyTypes(Request $request, $id)
    {
        $propertyTypes = Property::find($id);
        $propertyTypes->property_name = $request->input('property_type');
        $propertyTypes->update();

        return redirect()->route('property-types')->with('success', 'Property Updated Successfully');
    }

    public function listPropertySubtypes()
    {
        $propertyTypes = PropertySubtype::all();
        return view('viewPropertySubTypes')->with('propertyTypes' , $propertyTypes);
    }

    public function editPropertySubtypes($id)
    {
        $propertySubtypes = PropertySubtype::find($id);
        return view('editPropertySubtype')->with('propertySubtypes', $propertySubtypes);
    }

    public function updatePropertySubtype(Request $request, $id)
    {
        $propertySubtypes = PropertySubtype::find($id);
        $propertySubtypes->property_subtypes = $request->input('property_subtype_name');
        $propertySubtypes->update();

        return redirect()->route('property-subtypes')->with('success', 'Property Subtype Updated Successfully');
    }

    public function list()
    {
        $propertyTypes = Property::all();
        $propertySubtypes = PropertySubtype::groupBy('property_subtypes')->pluck('property_subtypes');
        $properties = DB::table('property_sub_type_hierarchies')
        ->take(6)
        ->get();
        //return view('welcome')->with('properties', $properties , $propertyTypes);
        return view('welcome')->with('properties', $properties)->with('propertyTypes', $propertyTypes)->with('propertySubtypes', $propertySubtypes);
    }

    public function listSubtypes()
    {
        $propertyTypes = Property::all();
        return view('property_subtypes1')->with('propertyTypes', $propertyTypes);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $property_type = new Property;
        $property_type->property_name = $request->input('property_name');
        $property_type->save();
        return redirect()->back()->with('success', 'Property Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $property = PropertySubTypeHierarchy::find($id);

        return view('propertiesview', compact('property'));
    }
    
    public function subtypeHierarchy(Request $request)
    {
        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);

        $subtypeHierarchy = new PropertySubTypeHierarchy;
        $subtypeHierarchy->property_type = $request->input('property_type');
        $subtypeHierarchy->property_subtype = $request->input('propertysubType');
        $subtypeHierarchy->property_name = $request->input('propertyName');
        $subtypeHierarchy->property_price = $request->input('propertyPrice');
        $subtypeHierarchy->image = 'images/' . $imageName;
        $subtypeHierarchy->description = $request->input('item_description');
        $subtypeHierarchy->property_owner = $request->input('propertyOwner');
        $subtypeHierarchy->save();

        
        return redirect('property')->with('success', 'Property Added Successfully');
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
        //
    }

    public function searchProperty(Request $request)
    {
        $query = $request->property_subtype;
        $searchresults = DB::table('property_sub_type_hierarchies')
        ->where('property_subtype', $query)
        ->get();

        //return view('propertiesview', compact('property'));
        return view('viewsearchproperties')->with('searchresults' , $searchresults);
    }
}
