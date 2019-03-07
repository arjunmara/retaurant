<?php

namespace App\Http\Controllers\backend;

use App\Model\Ourstory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoryController extends Controller
{
    public function index()
    {
        $datas = Ourstory::Orderby('id','desc')->first();
        return view('backend.pages.ourstory.add',compact('datas'));
    }

    public function update(Request $request)
    {
        $id = (int)$request->id;
        $datas = Ourstory::find($id);

        if($datas)
        {
            $datas->details = $request->details;
            $datas->save();

            return redirect()->back()->with('success',"Updated Successfully!!!");
        }
       else
           {
               return redirect()->back()->with('error',"Something went Wrong!!!");
           }
    }
}
