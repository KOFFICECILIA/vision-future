<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\School;
use App\Models\Student;
use App\Models\Classe;
use App\Models\Level;
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
        if(!Auth::guard('school')->check()){
            return redirect()->back();
        }

        $school = Auth::guard('school')->user();

        $students = Student::leftJoin('classes', 'students.classe_id', '=', 'classes.id')
            ->join('levels', 'classes.level_id', '=', 'levels.id')
            ->select('students.*')
            ->where('classes.school_id', '=', $school->id)
            ->where('levels.is_active', '=', 1)
            ->where('classes.is_active', '=', 1)
            ->get();
        
        $classes = Classe::join('levels', 'classes.level_id', '=', 'levels.id')
        ->select('classes.*')
        ->where('classes.school_id', '=', $school->id)
        ->where('levels.is_active', '=', 1)
        ->where('classes.is_active', '=', 1)->get();
        // $students = Student::where('is_active', 1)->where(function($student) use($school) {
        //     $student->classe->school->id == $school->id;
        // })->get();

        // dd($students);

        return view('dash', compact('students', 'classes'));
    }  

    public function verif(){
        return view('verify');
    }  

    public function ecoleInscription(){
        return view('ecoleInscription');
    }  

    public function ecoleConnexion(){
        return view('ecoleConnexion');
    } 
    
    public function verification(Request $request){
        $student = Student::where('matricule', $request->matricule)->first();
        return view('detail', compact('student'));
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

        if (Auth::guard('school')->attempt($credentials)) {
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

    public function studentForm(){
        $classes = Classe::where('school_id', Auth::guard('school')->user()->id)->where('is_active',1)->get();
        return view('enregistre', compact('classes'));
    }

    public function classeForm(){
        $levels = Level::where('is_active',1)->get();
        return view('classeForm', compact('levels'));
    }
}