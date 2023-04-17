<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Validator;
use App\Http\Requests\IndexPostRequest;

class AuthController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }
    
    public function login(IndexPostRequest $request)
    {
        $validatedData = $request->validated();
        //var_dump($validatedData); exit;
        return view('top', ['datum' => $validatedData]);
    }
    
}
