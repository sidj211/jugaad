<?php

namespace App\Http\Controllers;

use App\Ad;
use App\Category;
use App\EventDetail;
use App\Photo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

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

        $user = Auth::user();
        $data = array(
            'user_id' => $user->id,
            'title' => $request->title,
            'description' => $request->description,
            'price'  => $request->price,
            'subcategory_id' => $request->subcategory_id,
            'subccategory_id' => $request->subccategory_id,
            'contact' => $request->contact,
        );
        $getid = Ad::create($data);
        if($request->hasfile('photo_id'))

            foreach($request->file('photo_id') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/images/', $name);
                $photo = Photo::create(['file'=>$name,'ad_id'=>$getid->id]);


            }


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
        $user = Auth::user();
      /*$eventdetails =  EventDetail::create($request->all());*/
       $eventdetails=$user->evententries()->create($request->all());

        Session::flash('message', 'Your record has been taken, we will notify you shortly!');
        return redirect('/createpost');

    }

    public function showuserdashboard()
    {
        $user = Auth::user();
        $adcount = $user->ads->count();

        $activecount = DB::table('ads')->where('user_id','=',$user->id)->where('featured','=',1)->count();
        $inactivecount = DB::table('ads')->where('user_id','=',$user->id)->where('status','=',0)->count();
    //
        return view('userpanel.dashboard',compact('adcount','activecount','inactivecount'));
    }

    public function userallads()
    {

        $user = Auth::user();
        $ads = $user->ads()->paginate(10);
        return view('userpanel.myads',compact('ads'));
    }

    public function profilesetting()
    {
        return view('userpanel.profilesetting');

    }

    public function updateprofilephoto(Request $request)
    {
        $user = Auth::user();

        if($file = $request->file('file'))
        {
            $name = time().$file->getClientOriginalName();
            $file->move('profilephoto',$name);
            User::findOrFail($user->id)->update(['file'=>$name]);
        }
        Session::flash('message', 'Profile photo updated successfully!');
        return redirect('/profilesetting');

    }

    public function privacysetting()
    {
        return view('userpanel.privacysetting');
    }
}
