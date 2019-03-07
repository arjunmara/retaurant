<?php

namespace App\Http\Controllers\frontend;
use Alert;
use App\Model\Hotel;
use App\Model\Logo;
use App\Model\Menu;
use App\Model\Service;
use App\Model\Submenu;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
    public function store(Request $request)
    {
        $name = $request->name;
        $qty = $request->qty;
        $price = $request->price;
        $id = $request->id;

        $duplicates = Cart::search(function ($cartItem, $rowId)use($request) {
            return $cartItem->id === $request->id;
        });


        if($duplicates->isNotEmpty()){
            return redirect()->back()->with('error','ITEM IS ALREADY IN THE CART!!!');
        }


        cart::instance('default')->add($id,$name,1,$price)->associate('App\Model\Submenu');
        return redirect()->back()->with('success','ITEM ADDED TO CART!!!');

    }


    public function destroy(Request $request)
    {
        Cart::destroy();
        Alert::success('Welocme to the Dashboard!!!');
        return redirect()->back();

    }

    public function delete(Request $request){

        $id = $request->id;
        $datas = Cart::instance('default')->remove($id);
        return response()->json();


    }

    public function update(Request $request){


        $qty = $request->qty;
        $row = $request->id;
        $datas = Cart::instance('default')->update($row, $qty);

        return response()->json($datas);

    }

    public function checkout(Request $request)
    {
        $_datas['menus'] = Menu::Orderby('id','desc')->get();
        $_datas['submenus'] = Submenu::Orderby('id','desc')->paginate(12);
        $_datas['lo'] = Logo::Orderby('id','desc')->first();
        $_datas['services'] = Service::Orderby('id','desc')->get();
        $_datas['site'] = Hotel::Orderby('id','desc')->first();

        return view('frontend.pages.checkout',$_datas);

    }





}
