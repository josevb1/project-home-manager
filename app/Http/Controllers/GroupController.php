<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Group;
use Auth;
use Illuminate\Http\Request;  
class GroupController extends Controller
{
   
    public function index()
    {

        $posts = Group::all();
   
        return $posts;
    }
 

    public function create()
    {
    
         return view('pages.groups.create');
     }


     protected function validator(array $data)
     {
       $validatedData = $request->validate([
            'name' => 'required|unique:posts|max:255',
            'email' => 'required|unique:posts|max:255',
            'notes' => 'required',
        ]);
     }


    public function store(Request $request)
    {

   

        $posts = new Group;
 
        $posts->name = $request->name;
        $posts->email = $request->email;
        $posts->notes = $request->notes;
 
        $posts->save();
 
        // return redirect('/groups');



        
        // Group::create($request->all());
        
        // return back();
      


    // if($request->isMethod('$post')) {
    //     $data =  $request->all(); 
    //     $posts = new Group;
    //     $posts->id = $data['id'];
    //     $posts->name = $data['name'];
    //     $posts->email = $data['email'];
    //     $posts->notes = $data['notes'];
        
       
    //     return response()->json([$request->all()]);

    //     // $posts->save();
    
    }

        
    // $posts = new Group;
    // $posts->id = $request->input('id');
    // $posts->name = $request->input('name');
    // $posts->email = $request->input('email');
    // $posts->notes = $request->input('notes');

    // // dd($posts);
    // return response()->json([$request->all()]);

    
    /**
     * Display the specified resource.
     *
     * @param  \App\Group  $groups
     * @return \Illuminate\Http\Response
     */
    // public function show(Group $groups)
    public function show()
    {
   
        return Group::all();
    }
   
    public function update(Request $request, Groups $groups)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Group $groups
     * @return \Illuminate\Http\Response
     */
    public function destroy(Groups $groups)
    {
        $posts = \App\Group::findOrFail($id);
        if($posts->delete())
        return new GroupResource($post);
    }
}