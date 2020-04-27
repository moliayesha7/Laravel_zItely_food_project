<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostCat;
use App\Post;
class PostManagement extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('postPage');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Post::all();
        return view('posts.index',[
            'all_post'=>$data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=PostCat::get();
        return view('posts.create',[
            'all_post_cat'=>$data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'post_title' => 'required',
            'post_cat'=> 'required',
            'photo'=>'required | image',
            'post_content'=>'required'
          
        ]);
      
        $image=$request->file('photo');
        $image_name=md5(time().rand()).".".$image->getClientOriginalExtension();
        $image->move(public_path('photos/post/'),$image_name);


        Post::create([
            'post_title'=> $request->post_title,
            'post_date'=>date('F d,Y'),
            'post_cat'=>$request->post_cat,
            'photo'=>$image_name,
            'post_content'=>$request->post_content   
         ]);


    return redirect()-> back()->with('message','Post Added Successfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Post::find($id);
        return view('posts.show', [
            'show_data' => $show
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $show=Post::find($id);
        return view('posts.edit',[
            'edit'=>$show
        ]);
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
        $update_data=  Post::find($id);
        $update_data -> title = $request-> title;
       
        $update_data->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Post::find($id);
        $data->delete();
        return redirect()->back()-> with('message','Menu Deleted Successfull');
    }


    public function postPage(){
        $data=Post::get();
        return view('frontend.blog',[
            'all_post'=>$data
        ]);
    }
    
}
