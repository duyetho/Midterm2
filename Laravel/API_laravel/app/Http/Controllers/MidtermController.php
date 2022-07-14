<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use DB;
class MidtermController extends Controller
{
    public function getFoods(){
        $foods= Food:: all();
        return response()->json($foods);
    }
      
    public function getOneFoods($id){
        $foods=Food::find($id);
        return response()->json($foods);

    }		
    public function searchfoods(Request $request)
    {
        if($request->keyword == null)
        {
            return DB::table('foods')->get();
        }
        $result = DB::table('foods')
                ->where('name', 'like', "%$request->keyword%")
                ->get();
        return $result;
    }
    public function searchprice(Request $request)
    {
        if($request->keyword == null)
        {
            return DB::table('foods')->get();
        }
        $result = DB::table('foods')         
            ->whereBetween('price', [$min_price, $max_price])
            ->get();
    
        return $result;
    }

   
}
