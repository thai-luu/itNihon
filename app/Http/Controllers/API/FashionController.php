<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use App\Models\User; 
use Illuminate\Support\Facades\Auth; 
use App\Models\Fashion; 
use Validator;
use DB;
class FashionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fashion = Fashion::paginate(8);
        return $fashion;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $fashion = DB::table('fashions')->where('id', $id)->first();
        
        $fashion = Fashion::where('id', $id)->with('sizes:name')->first();
        if ($fashion == null) {
            return response()->json(['error' =>'not found'], 404);
        }
        foreach($fashion->sizes as $size) {            
            $size->quantity = $size->pivot->quantity;
            $size->size_id = $size->pivot->size_id;
            unset($size->pivot);
        }
        return $fashion;
    }
 
    public function showRecommended($id)
    {
        // $fashion = DB::table('fashions')->where('id', $id)->first();
        if (Auth::check()) {
            $user = Auth::user(); 
            json_decode($user,true);
        if($user['height'] == null){
            $sizeCheck = '%%';
        }
        else if($user['height'] <= 160){
            $sizeCheck = 1;
        }
        else if($user['height'] >= 161 && $user['height'] <= 170){
            $sizeCheck = 2;
        }
        else if($user['height'] >= 171 && $user['height'] <= 180){
            $sizeCheck = 3;
        }
        else if($user['height'] >= 181 && $user['height'] <= 190){
            $sizeCheck = 4;
        }
        else if($user['height'] >= 191){
            $sizeCheck = 5;
        }
        
        $fashion = DB::table('fashions')->join('fashion_size', 'fashions.id', '=', 'fashion_size.fashion_id')->where('fashion_id',$id)->where('size_id', 'like',$sizeCheck)->paginate(8);
        return $fashion;
    }
    else{
        return response()->json(['error' =>'api.something_went_wrong'], 500);
    }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function filter(Request $request)
    {
        $name = $request->name;
        $species = $request->species;
        $priceMin = (empty($request->min)) ? 0 : $request->min ;
        $priceMax = (empty($request->max)) ? 10000000 : $request->max;
        $name = '%'. $name .'%';
      //  return $name;
        $species = '%'. $species .'%';
        $fashions = DB::table('fashions')
                ->where('name', 'like', $name)
                ->where('species', 'like', $species)
                ->where('price','>=', $priceMin)
                ->where('price','<=', $priceMax)
                ->paginate(8);
        return $fashions;
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
        //
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
