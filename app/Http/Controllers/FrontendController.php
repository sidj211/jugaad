<?php

namespace App\Http\Controllers;

use App\Ad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        Ad::all();
        return view('frontend.home',compact('',''));


    }

    public function showform()
    {
        return view('userpanel.createad');
    }

    public function createpost(Request $request)
    {


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

        $input = $request->all();
        $user = Auth::user(); //logged in user

        if ($file=$request->file('photo_id')) //checking if file exits
        {
            //file ka name generate karenge then
            // munipulating the file name
            $name = time().$file->getClientOriginalName();

            // then file ko move karenge directory ke andar
            $file->move('images',$name);

            // photo model se uska object banaya then usme photo id dali
            //productimag table has file columne
            // photo name iski helo se doosri table mai chala gya
            $photo = Adphoto::create(['file'=>$name]);

            // then with the help of object we will get the id of current image

            //input variable se photo_id column mai name ko replace karkek id daal denge
            $input['photo_id'] = $photo->id;
        }

        //products() is the name of the relationship between user and products
        $temp=$user->ads()->create($input);


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
}
