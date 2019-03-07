<?php

namespace App\Http\Controllers\backend;
use Illuminate\Support\Facades\Input;
use App\Model\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public function index()
    {
        $datas = Menu::Orderby('id','desc')->get();
        return view('backend.pages.menu.add',compact('datas'));
    }

    public function add(Request $request)
    {
        $datas = new Menu;
        $datas->menu = $request->menu;
        $datas->detail = $request->detail;

        if(Input::hasFile('image'))
        {
            $file = Input::File('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/frontend/image/menu/',$filename);
            $datas->image = $filename;
        }
        $datas->save();
        return redirect()->back()->with('success',"Added Successfully");
    }


    public function delete(Request $request)
    {
        $id = (int)$request->id;
        $datas = Menu::find($id);

        if($datas)
        {
            $datas->delete();
            return redirect()->back()->with('success',"Deleted Successfully!!");
        }
        else
            {
                return redirect()->back()->with('error',"Deleted Already!!");
            }
     }


    public function edit(Request $request)
    {
        $id = (int)$request->id;
        $datas = Menu::find($id);
        return view('backend.pages.menu.edit',compact('datas'));

    }


    public function update(Request $request)
    {
        $id = (int)$request->id;
        $datas = Menu::find($id);

        if($datas)
        {
            $datas->menu = $request->menu;
            $datas->detail = $request->detail;

            if(Input::hasFile('image'))
            {
                $file = Input::File('image');
                $filename = time().'.'.$file->getClientOriginalExtension();
                $file->move(public_path().'/frontend/image/menu/',$filename);
                $datas->image = $filename;
            }
            $datas->save();
            return redirect()->back()->with('success',"Added Successfully");
        }
        else
            {
                return redirect()->back()->with('error',"Something Went Wrong!!!");
            }

    }



}
