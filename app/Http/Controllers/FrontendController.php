<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Category;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*to show to everyone, the home page*/
    public function index()
    {


        $featuredAds=Ad::all()->where('featured','=',1);
        return view('frontend.home',compact('featuredAds'));


    }

    public function showform()

    {
        $categories = Category::all();
        return view('userpanel.createad',compact('categories'));
    }

    public function createpost(Request $request)
    {

        return $request->all();

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

        /*$data = array(
            'title' => $request->title,
            'description' => $request->description,
            'price'  => $request->price,
            'subcategory_id' => $request->subcategory_id,
            'contact' => $request->contact,
        );
        $getid = Ad::create($data);
        if($request->hasfile('photo_id'))

            foreach($request->file('photo_id') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);
                $photo = Photo::create(['file'=>$name,'ad_id'=>$getid->id]);


            }*/


        return json_encode($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    public function getsubcategories($id)
    {
        $subcategory = DB::table('sub_categories')->where('category_id','=',$id)->pluck('name','id');
        return json_encode($subcategory);
    }

    public function getsubccategories($id)
    {
        $subcategory = DB::table('subccategories')->where('sub_category_id','=',$id)->pluck('name','id');
        return json_encode($subcategory);
    }

    public function createevent(Request $request)
    {
        return json_encode($request->all());

    }

    public function showuserdashboard()
    {
        return view('userpanel.dashboard');
    }

}
