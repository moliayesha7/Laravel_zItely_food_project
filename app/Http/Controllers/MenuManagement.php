<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MenuCat;
use App\Menu;

class MenuManagement extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('menupage');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Menu::all();
        return view('menu.index',[
            'all_menu'=>$data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=MenuCat::all();
        return view('menu.create',[
            'menu_cat'=>$data
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
            'name' => 'required',
            'menu_cat'=> 'required',
            'photo'=>'required | image',
            'mx_price' => 'required',
            'mn_price' => 'required',
        ]);

        $image=$request->file('photo');
        $image_name=md5(time().rand()).".".$image->getClientOriginalExtension();
        $image->move(public_path('photos/menu/'),$image_name);

            Menu::create([
                'name'      =>$request      ->name,
                'cat_name'  => $request     -> menu_cat,
                'photo'     => $image_name,
                'mx_price'  => $request     -> mx_price,
                'mn_price'  => $request     -> mn_price
            ]);


        return redirect()-> back()->with('message','Menu Added Successfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Menu::find($id);
        return view('menu.show', [
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
        $show=Menu::find($id);
        return view('menu.edit',[
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
        $update_data=  Menu::find($id);
        $update_data -> name = $request-> name;
        $update_data -> cat_name = $request-> cat_name;
        $update_data -> mx_price = $request-> mx_price;
        $update_data -> mn_price = $request-> mn_price;
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
        $data=Menu::find($id);
        $data->delete();
        return redirect()->back()-> with('message','Menu Deleted Successfull');
    }

    public function menupage(){
        $vorta=Menu::where('cat_name','Vorta') -> take(3) ->get();
        $vaji=Menu::where('cat_name','Vaji') -> take(3) ->get();
        $dal=Menu::where('cat_name','Dal') -> take(3) ->get();
        $manso=Menu::where('cat_name','Manso') -> take(3) ->get();
        $vat=Menu::where('cat_name','Vat') -> take(3) ->get();
        $biriani=Menu::where('cat_name','Biriani') -> take(3) ->get();

        return view('frontend.menu',[
              'all_vorta'      => $vorta,
                'all_vaji'     =>$vaji,
                'all_manso' =>$manso,
                'all_dal' => $dal,
                'all_vat'=>$vat,
                'all_biriani'=>$biriani
               
        ]);
    }
}
