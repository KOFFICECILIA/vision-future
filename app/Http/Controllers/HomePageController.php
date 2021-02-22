<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\School;
use Hash;
use Auth;

class HomePageController extends Controller{
    public function index(){
        return view('index');
    }  
    
    public function about(){
        return view('about');
    }  

    public function dashboard(){
        return view('dashboard');
    }  

    public function verif(){
        return view('verif');
    }  

    public function ecoleInscription(){
        return view('ecoleInscription');
    }  

    public function ecoleConnexion(){
        return view('ecoleConnexion');
    } 
    
    public function ecoleInscriptionPost(Request $request){
        // dd($request->all());
        $input = $request->all();

        $school = School::create([
            'code'  =>  $input['code'],
            'email'  =>  $input['email'],
            'ecole'  =>  $input['ecole'],
            'ville'  =>  $input['ville'],
            'password'  =>  Hash::make($input['password'])
        ]);
        
        $credentials = $request->only('email', 'password');
        // dd();
        // Auth::guard('school')->loginUsingId($school->id);
        
        if(Auth::guard('school')->once($credentials)){
            return redirect('/dashboard');
        }else{
            return redirect()->back()->withInput();
        }
    }

    public function ecoleConnexionPost(Request $request){
        $credentials = $request->only('email', 'password');

        if (Auth::guard('restaurant')->attempt($credentials)) {
            return redirect('/dashboard');
        }else{
            return redirect()->back();
        }
    }

    public function logout(Request $request)
    {
        \Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('/');
    }

}