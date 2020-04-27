<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PostCat;
class PostCatManagement extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=PostCat::get();
        return view('posts.cat.index',[
            'all_cat' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('posts.cat.create');
       
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
            'name' => 'required',
           
          
        ]);
        PostCat::create([
            'title'=> $request-> name,
            
            
         ]);

        return redirect()-> back()->with('message','Post Category Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = PostCat::find($id);
        return view('posts.cat.show', [
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
        $show=PostCat::find($id);
        return view('posts.cat.edit',[
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
        $update_data=  PostCat::find($id);
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
        $data=PostCat::find($id);
        $data->delete();
        return redirect()->back()-> with('message','Menu Deleted Successfull');
    }
}
