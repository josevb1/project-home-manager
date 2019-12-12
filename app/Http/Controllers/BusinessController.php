<?php
namespace App\Http\Controllers;
use App\Business;
use Auth;
use Illuminate\Http\Request;  
use App\Http\Resources\Business as BusinessResource;
class BusinessController extends Controller
{
    // public function __construct() 
    // {
    //     $this->middleware('client.credentials');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = \App\Business::orderBy('id', 'desc')->paginate(5);
        // return GroupResource::collection($posts);
        return view('pages.business.index')->with('posts', $posts);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('pages.business.create');
     }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //    //validate the data
    //   $this->validate($request, [
    //   ]);
    // $posts = new Group();
    // if ($request->file('image')) {
    //   $posts->image = '/storage/' . $request->file('image')->store('image');
    // }
    // $posts->name = $request->name;
    // $posts->email = $request->email;
    // $posts->image = $request->image;
    // $posts->notes = $request->notes;
    // $posts->save();
    // return redirect()->route('groups.index');
    $posts = $request->isMethod('put') ? Business::findOrFail
    ($request->business_id) : new Business;
    $posts = new Business();
    if ($request->file('image')) {
    $posts->image = '/storage/' . $request->file('image')->store('image');
    }
    $posts->id = $request->input('group_id');
    $posts->name = $request->input('name');
    $posts->email = $request->input('email');
    $posts->image = $request->input('image');
    $posts->notes = $request->input('notes');
    if($posts->save()) {
        return new BusinessResource($posts);
    }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Group  $groups
     * @return \Illuminate\Http\Response
     */
    // public function show(Group $groups)
    public function show($id)
    {
        //single group 
        $posts = \App\Business::findOrFail($id);
        return new BusinessResource($posts);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Group  $groups
     * @return \Illuminate\Http\Response
     */
    // public function edit(Groups $groups)
    // {
    //     //
    // }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Group  $groups
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, business $business)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Group $groups
     * @return \Illuminate\Http\Response
     */
    public function destroy(Business $business)
    {
        $posts = \App\Business::findOrFail($id);
        if($posts->delete())
        return new BusinessResource($post);
    }
}