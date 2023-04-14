<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }
    
    public function login(Request $request)
    {
        $name = $request->input('name');
        $pass = $request->input('password');
        var_dump($name, $pass); exit;
    }
    
}
