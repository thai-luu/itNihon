<?php

namespace App\Http\Controllers;

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
        $fashions = Fashion::paginate(20);
        
        return view('fashion.index',compact('fashions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fashion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [ 
            'name' => 'required', 
            'species' => 'required', 
            'description' => 'required', 
            'style' => 'required', 
            'sex' => 'required', 
            'img_url' => 'required',
            'sold' => 'required',
            'price' => 'required',
        ]);
        
if ($validator->fails()) { 
            return redirect(route('fashion.create'))
            ->withErrors($validator)
            ->withInput();
        }
else{
        $fashion = new Fashion;
        $fashion->name = $request->name;
        $fashion->species = $request->species;
        $fashion->description = $request->description;
        $fashion->style = $request->style;
        $fashion->sex = $request->sex;
        $fashion->img_url = $request->img_url;
        $fashion->sold = $request->sold;
        $fashion->price = $request->price;
        $fashion->save();
        $message = 'Sản phẩm '  . $fashion->name .' được tạo thành công  ';
        return redirect()->route('fashion.create')->with('message', $message);
    }
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
