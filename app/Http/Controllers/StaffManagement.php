<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
class StaffManagement extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('showStaffPage');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff=Staff::all();
    
        return view('staff.index',[
            'all_staff' => $staff
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('staff.create');
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
            'job_title'=> 'required',
            'photo'=>'required | image',
          
        ]);
        $image=$request->file('photo');
        $image_name=md5(time().rand()).".".$image->getClientOriginalExtension();
        $image->move(public_path('photos/staff/'),$image_name);


        Staff::create([
            'name'=> $request->name,
            'job_title'=>$request->job_title,
            'photo'=>$image_name,
            'fb'=>$request->fb,
            'twitter'=>$request->twitter,
            'linkdin'=>$request->linkdin,
            'ins'=>$request->ins
            
         ]);
    return redirect()-> back()->with('message','Stuff Added Successfull');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Staff::find($id);
        return view('staff.show', [
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
        $show=Staff::find($id);
        return view('staff.edit',[
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
        $update_data=  Staff::find($id);
        $update_data -> name = $request-> name;
        $update_data -> job_title = $request-> job_title;
        $update_data -> fb = $request-> fb;
        $update_data -> twitter = $request-> twitter;
        $update_data -> linkdin = $request-> linkdin;
        $update_data -> ins = $request-> ins;


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
        $data=Staff::find($id); 
        $data->delete();
        return redirect()-> back()->with('message','Staff Deleted Successfull');
    }


    public function showStaffPage(){

        $staff=Staff::take(4)->orderBy('id','DESC')->get();
        return view('frontend.staff',[
            'staff_data'=>$staff
        ]);
    }
}
