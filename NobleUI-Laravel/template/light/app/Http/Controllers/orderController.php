<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orders;
use App\studio_profile;
use App\User;

class orderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order_items = orders::all();
        $studio=User::all();

        // load the view and pass the sharks
        return view('dashboard',compact('order_items','studio'));
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
        $this->validate($request,[
            'package_id'=>'required',
            'total'=>'required',
            'qty'=>'required'
            
        ]);

        
        $item = new orders;
        $item->name=auth()->user()->name;
        $item->email=auth()->user()->email;
        $item->total_amt=$request->input('total');
        $item->payment_status='No';
        $item->studio_id=0;
        $item->package_id=$request->input('package_id');
        $item->qty=$request->input('qty');
        $item->save();


return redirect('cartPage');


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
        $check =orders::where('id',$id);
        if($check){
            orders::where('id',$id)->update([
                'payment_status'=>$request->payment_status,
                ]);
            return Redirect()->back()->with('success','Product added on Cart');
    }
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
