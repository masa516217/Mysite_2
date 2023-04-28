<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Validator;
use App\Http\Requests\IndexPostRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }
    
    public function login(IndexPostRequest $request)
    {
        $datum = $request->validated();
        //var_dump($validatedData); exit;
        if (Auth::attempt($datum) === false) {
            return back()
        ->withInput()
        ->withErrors(['auth' => 'emailかパスワードに誤りがあります',])
        ;
        }
        
        $request->session()->regenerate();
        return redirect()->intended('top');
    }
    
    /*public function top()
    {
        return view('top');
    }*/
    
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->regenerateToken();
        $request->session()->regenerate();
        return redirect(route('front.index'));
    }
    
}
