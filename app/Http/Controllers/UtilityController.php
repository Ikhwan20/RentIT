<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utility;
use Illuminate\Support\Facades\Auth;

class UtilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     //for admin use
    public function index()
    {
        $utility = Utility::all();
        return view('utility/utilityIndex');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('utility/addutility');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        $fileName = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $requestData["photo"] = '/storage/'.$path;
        $requestData["owner"] = Auth::id();
        $utility = Utility::create($requestData);
        return view('utility/utilityoverview', ['utility'=> $utility]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $id = Auth::id();
        $utility = Utility::select('select * from car where owner_id like ?', [$id]);
        return view('utility/utilityview', ['utility'=> $utility]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $UtilityData = Utility::where('id', $id)->get();
        return view('utility/editutility', ['utility'=>$UtilityData]);
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
        $name = $request->input('name');
        $brand = $request->input('brand');
        $prices = $request->input('prices');
        $category = $request->input('category');
        $description = $request->input('description');

        $fileName = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $photo = '/storage/'.$path;

        Product::where('id', $id)->update(['name'=>$name, 'prices'=>$prices, 'brand'=>$brand, 'category'=>$category, 'description'=>$description, 'photo'=>$photo]);

        return redirect('utility')->with('flash_message', 'Utility Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Utility::where('id', $id)->delete();
        return redirect('utility')->with('flash_message', 'Utility Deleted!');
    }

    /**
     * Search the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        $searchtext = $_GET['query'];
        $utility = Utility::where('name', 'LIKE', '%' . $searchtext . '%')->get();
 
        return view('utility/utility', compact('utility'));
    }
}
