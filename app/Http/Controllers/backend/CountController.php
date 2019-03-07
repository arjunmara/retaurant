<?php

namespace App\Http\Controllers\backend;

use App\Model\Count;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CountController extends Controller
{
    public function index()
    {
        $datas = Count::Orderby('id','desc')->first();
        return view('backend.pages.count.update',compact('datas'));
    }


    public function update(Request $request)
    {


        $id = (int)$request->id;
        $datas = Count::find($id);

        $datas->title1 = $request->title1;
        $datas->title2 = $request->title2;
        $datas->title3 = $request->title3;
        $datas->title4 = $request->title4;
        $datas->val1 = $request->val1;
        $datas->val2 = $request->val2;
        $datas->val3 = $request->val3;
        $datas->val4 = $request->val4;
        $datas->save();


        return redirect()->back()->with('success','Updated Successfully!!!');

    }
}
