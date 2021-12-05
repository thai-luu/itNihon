<?php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use App\Models\User; 
use Illuminate\Support\Facades\Auth; 
use Validator;
use DB;
use App\Models\Fashion; 
class UserController extends Controller 
{
public $successStatus = 200;
/** 
     * login api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function login(){ 
        // $user = Auth::user();
        // return response()->json($user);
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('MyApp')-> accessToken; 
            
            return response()->json(['success' => $success], $this-> successStatus); 
        } 
        else{ 
            return response()->json(['error'=>'Unauthorised'], 401); 
        } 
    }
/** 
     * logout api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function logout(){ 
        if (Auth::check()) {
            Auth::user()->token()->revoke();
            return response()->json(['success' =>'logout_success'], 200); 
        }else{
            return response()->json(['error' =>'api.something_went_wrong'], 500);
        }
    }
/** 
     * Register api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function register(Request $request) 
    {  
        
      
        $validator = Validator::make($request->all(), [ 
            'name' => 'required', 
            'email' => 'required|email', 
            'password' => 'required', 
            'c_password' => 'required|same:password', 
        ]);
if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }
$input = $request->all();
$check = DB::table('users')->where('email', $input['email'])->first();
if(!empty($check)){
    return response()->json(['error'=>"email đã tồn tại"], 401);
}
else{
        $input['password'] = bcrypt($input['password']); 
        $user = User::create($input); 
        $success['token'] =  $user->createToken('MyApp')-> accessToken; 
        $success['name'] =  $user->name;
return response()->json(['success'=>$success], $this-> successStatus); 
}
    }
/** 
     * details api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function details() 
    { 
        if (Auth::check()) {
            $user = Auth::user(); 
        return response()->json(['success' => $user], $this-> successStatus);
        }else{
            return response()->json(['error' =>'api.something_went_wrong'], 500);
        }
    } 
    public function update(Request $request, $id) 
    { 
        $name = $request->name;
        
        $height = $request->height;
        $weight = $request->weight;
        $age = $request->age;
        $sex = $request->sex;
        $user = User::find($id);
        if($user){
        $user->name = $name;
        $user->height = $height;
        $user->weight = $weight;
        $user->age = $age;
        $user->sex = $sex;
        $user->save();
        return response()->json(['success' => $user], $this-> successStatus);
        }else{
            return response()->json(['error' =>'api.something_went_wrong'], 500);
        }
    } 
    public function recommended() 
    { 
        if (Auth::check()) {
            $user = Auth::user(); 
            json_decode($user,true);
            $sex = $user['sex'];
            $sex = '%'. $sex .'%';
            if($user['age'] >= 18 && $user['age'] <= 35){
                $fashion = DB::table('fashions')->where('style', 0)->where('sex','like', $sex)->paginate(8);
            }
            elseif($user['age'] >= 36 && $user['age'] <= 50){
                $fashion = DB::table('fashions')->where('style', 1)->where('sex','like', $sex)->paginate(8);
            }
            elseif($user['age'] >= 51){
                $fashion = DB::table('fashions')->where('style', 2)->where('sex','like', $sex)->paginate(8);
            }
            else{
                $fashion = DB::table('fashions')->where('sex','like', $sex)->get();
            }
        return response()->json(['success' => $fashion], $this-> successStatus);
        }else{
            return response()->json(['error' =>'api.something_went_wrong'], 500);
        }
    }
}