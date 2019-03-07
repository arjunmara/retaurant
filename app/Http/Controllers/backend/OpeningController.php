<?php

namespace App\Http\Controllers\backend;

use App\Model\Opening;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OpeningController extends Controller
{
    public function index()
    {
        $datas = Opening::Orderby('id','desc')->first();
        return view('backend.pages.opening.add',compact('datas'));
    }

    public function update(Request $request)
    {
        $id = (int)$request->id;
        $datas = Opening::find($id);

        if($datas)
        {

            $datas->day1 = $request->day1;
            $datas->time1 = $request->time1;
            $datas->day2 = $request->day2;
            $datas->time2 = $request->time2;
            $datas->day3 = $request->day3;
            $datas->time3 = $request->time3;

            $datas->save();

            return redirect()->back()->with('success',"Hotel-Information Updated Successfully!!!!!");
        }
        else
        {
            return redirect()->back()->with('error',"Sorry!!!!");
        }

    }



}
