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
        $fashions = Fashion::paginate(8);
        
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
            'quantity' => 'required',
        ]);
        
if ($validator->fails()) { 
            return redirect(route('fashion.create'))
            ->withErrors($validator)
            ->withInput();
        }
else{
    $fashion_id = DB::table('fashions')->insertGetId([
        'name'      => $request->name,
        'species'   => $request->species,
        'description' => $request->description,
        'style' => $request->style,
        'sex' => $request->sex,
        'img_url' => $request->img_url,
        'sold' => $request->sold,
        'price' => $request->price
    ]
        );
        for($i = 1; $i <= 5; $i++){
            DB::table('fashion_size')->insert([
                ['fashion_id' => $fashion_id, 'size_id' => $i, 'quantity' => $request->quantity],
            ]);
        }
        
        $message = 'Sản phẩm '  . $request->name .' được tạo thành công  ';
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
        $fashion = Fashion::find($id);
        
        return view('fashion.detail',compact('fashion'));
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
        $validator = Validator::make($request->all(), [ 
            'name' => 'required', 
            'species' => 'required', 
            'description' => 'required', 
            'style' => 'required', 
            'sex' => 'required', 
            'img_url' => 'required',
            'sold' => 'required',
            'price' => 'required',
           // 'quantity' => 'required',
        ]);
        
if ($validator->fails()) { 
            return redirect(route('fashion.create'))
            ->withErrors($validator)
            ->withInput();
        }
else{
    $fashion_id = DB::table('fashions')->where('id',$id)->update([
        'name'      => $request->name,
        'species'   => $request->species,
        'description' => $request->description,
        'style' => $request->style,
        'sex' => $request->sex,
        'img_url' => $request->img_url,
        'sold' => $request->sold,
        'price' => $request->price
    ]
        );
        $input = $request->all();
        for($i = 1;$i < 6;$i++){
        DB::table('fashion_size')->where('fashion_id',$id)->where('size_id',$i)->update([
             'quantity' => $input['quantity'.$i]
        ]);
    }
        $message = 'Sản phẩm '  . $request->name .' được cập nhật thành công  ';
        return redirect()->route('fashion.create')->with('message', $message);
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
    public function delete($id)
    {
       
        DB::table('fashions')
              ->where('id', '=', $id)
              ->delete();
              $message = 'success';
              $fashions = Fashion::paginate(6);
        
              return view('fashion.index',compact('fashions','message'));
    }
}
