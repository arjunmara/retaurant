<?php

namespace App\Http\Controllers\backend;
use Illuminate\Support\Facades\Input;
use App\Model\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    public function index()
    {
        $datas = Team::Orderby('id','desc')->paginate(6);
        return view('backend.pages.team.add',compact('datas'));
    }

    public function add(Request $request)
    {
      $this->validate($request,[

          'image' => 'required|mimes:jpg,png,jpeg',
          'name' =>'required',
          'title' => 'required',
          'details'=> 'required',
      ]);

        $datas = new Team;
        $datas->title = $request->title;
        $datas->name = $request->name;
        $datas->details = $request->details;

        if(Input::hasFile('image'))
        {
            $file = Input::File('image');
            $filename = time().'.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/frontend/image/team/',$filename);
            $datas->image = $filename;

        }

        $datas->save();

        return redirect()->back()->with('success',"Successfully Added!!!");

    }

    public function delete(Request $request)
    {
         $id = (int)$request->id;
         $datas = Team::find($id);

         if($datas)
         {
             $datas->delete();
             return redirect()->back()->with('success',"Deleted Successfully!!!!");
         }
         else
         {
             return redirect()->back()->with('success',"Data Already Deleted!!!");
         }
    }

    public function edit(Request $request)
    {
        $id = (int)$request->id;
        $data = Team::find($id);

        if($data)
        {
            $datas = Team::Orderby('id','desc')->get()->except($id);
            return view('backend.pages.team.edit',compact('datas','data'));
        }
        else
            {
                return view('error','Sorry Data not Found!!!');
            }

    }


    public function update(Request $request)
    {
        $id = (int)$request->id;
        $data = Team::find($id);

        if($data)
        {
            $data->title = $request->title;
            $data->name = $request->name;
            $data->details = $request->details;

            if(Input::hasFile('image'))
            {
                $file = Input::File('image');
                $filename = time().'.'.$file->getClientOriginalExtension();
                $file->move(public_path().'/frontend/image/team/',$filename);
                $data->image = $filename;

            }
            $data->save();
            return redirect()->back()->with('success',"Updated Successfully!!!");
        }
        else
        {
            return redirect()->back()->with('error',"Something Went Wrong!!");
        }
    }




}
