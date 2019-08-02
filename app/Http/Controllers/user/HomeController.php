<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class HomeController extends Controller
{
    public function Index()
    {
        $data = DB::table('products')->join('cates', 'products.cate_id', '=', 'cates.id')->select('products.*','cates.name as catename')->paginate(4);

        return view('user.page.home',['data'=>$data]);
    }
    public function getDataID($id)
    {
        $data = DB::table('products')->where('id','=',$id)->get();
        $images = DB::table('product_images')->where('product_id','=',$id)->get();
        return response()->json(['product'=>$data,'imagedetail'=>$images]);
    }
}
