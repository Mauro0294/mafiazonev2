<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
      
    public function loginRequest(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function register()
    {
        return view('auth/registration');
    }
      
    public function registerRequest(Request $request)
    {  
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->createUser($data);
         
        return redirect("/");
    }

    public function createUser(array $data)
    {
      return User::create([
        'username' => $data['username'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'cash' => 0,
        'bank' => 0,
        'power' => 0,
        'bullets' => 0,
        'credits' => 0,
        'kills' => 0,
        'briefcases' => 0,
        'health' => 100,
        'banned' => 0,
        'admin' => 0,
      ]);
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return redirect('login');
    }
}