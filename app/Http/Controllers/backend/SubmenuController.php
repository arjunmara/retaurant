<?php

namespace App\Http\Controllers\backend;
use Illuminate\Support\Facades\Input;
use App\Model\Menu;
use App\Model\Submenu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubmenuController extends Controller
{
    public function index()
    {
        $datas = Submenu::Orderby('id','desc')->paginate(6);
        $menus = Menu::Orderby('id','desc')->get();
        return view('backend.pages.submenu.add',compact('datas','menus'));
    }

    public function add(Request $request)
    {
        $datas = new Submenu;
        $datas->menu_id = $request->id;
        $datas->submenu = $request->submenu;
        $datas->price = $request->price;
        $datas->detail = $request->detail;

        if(Input::hasFile('image'))
        {
            $file = Input::File('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/frontend/image/submenu/',$filename);
            $datas->image = $filename;
        }
        $datas->save();
        return redirect()->back()->with('success',"Added Successfully");
    }


    public function search(Request $request)
    {
        $id = (int)$request->id;

        if($id == 0)
        {
            $datas = Submenu::Orderby('id','desc')->paginate(6);
            $menus = Menu::Orderby('id','desc')->get();
            return view('backend.pages.submenu.add',compact('datas','menus'));
        }
        else
        {

            $datas = Submenu::where('menu_id',$id)->paginate(6);
            $menus = Menu::Orderby('id','desc')->get();
            return view('backend.pages.submenu.add',compact('datas','menus'));

        }

    }


    public function edit(Request $request)
    {
        $id = (int)$request->id;
        $datas = Submenu::find($id);
        $ex = $datas->menu_id;

        if($datas)
        {
            $menus = Menu::Orderby('id','desc')->get()->except($ex);
            return view('backend.pages.submenu.edit',compact('datas','menus'));
        }
        else
        {
            return redirect()->Back()->with('error',"Something Went Wrong!!");
        }
    }

    public function delete(Request $request)
    {
       $id = (int)$request->id;
       $datas = Submenu::find($id);
       if($datas)
       {
           $datas->delete();
           return redirect()->Back()->with('success',"Deleted Successfully!!!");
       }
       else
           {
               return redirect()->Back()->with('error',"Data Deleted Already!!");
           }
    }


    public function update(Request $request)
    {
        $id = (int)$request->id;
        $datas = Submenu::find($id);


        if($datas)
        {
            $datas->menu_id = $request->menu_id;
            $datas->submenu = $request->submenu;
            $datas->price = $request->price;
            $datas->detail = $request->detail;

            if(Input::hasFile('image'))
            {
                $file = Input::File('image');
                $filename = time().'.'.$file->getClientOriginalExtension();
                $file->move(public_path().'/frontend/image/submenu/',$filename);
                $datas->image = $filename;
            }
            $datas->save();
            return redirect()->back()->with('success',"Added Successfully");
        }
        else
        {
            return redirect()->Back()->with('error',"Something Went Wrong!!");
        }
    }


}
