<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utility;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $id = Auth::id();
        $utility = DB::table('utility')->where('owner', $id)->get();
        return view('utility/utilityview', ['utility'=> $utility]);
    }

    public function utilityList()
    {
        $utility = Utility::all();
        return view('admin/utilityIndex', ['utility'=> $utility]);
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
        $name = $request->input('name');
        $brand = $request->input('brand');
        $prices = $request->input('prices');
        $category = $request->input('category');
        $description = $request->input('description');
        $owner = Auth::id();

        $fileName = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $photo = '/storage/'.$path;

        $utility = new Utility();
        $utility->name = $name;
        $utility->brand = $brand;
        $utility->prices = $prices;
        $utility->category = $category;
        $utility->description = $description;
        $utility->owner = $owner;
        $utility->photo = $photo;
        $utility->save();

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
        $utility = DB::table('utility')->where('owner', $id)->get();
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
        $owner = Auth::id();

        $fileName = time().$request->file('photo')->getClientOriginalName();
        $path = $request->file('photo')->storeAs('images', $fileName, 'public');
        $photo = '/storage/'.$path;

        Utility::where('id', $id)->update(['name'=>$name, 'prices'=>$prices, 'brand'=>$brand, 'category'=>$category, 'description'=>$description, 'owner'=>$owner, 'photo'=>$photo]);

        return redirect('utility')->with('flash_message', 'Utility Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Utility::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Utility Deleted');   
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
 
        return view('utility/utilitydesc', ['utility'=> $utility]);
    }

    public function welcome(){
        $utility = Utility::all();
        return view('welcome' , ['utility'=> $utility]);
    }

    public function utilitydesc($id){
        $utility = utility::where('id', $id)->get();
        return view('utility/utilitydesc', ['utility'=> $utility]);
    }

    public function category($cat)
    {
        $utility = Utility::where('category', $cat)->get();

        return view('utility/utilitydesc', compact('utility'));
    }
}
