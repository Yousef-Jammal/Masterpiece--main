<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;




class authController extends Controller
{
      // Show login form
      public function showLoginForm()
      {
          return view('auth.auth-login-basic');
      }

      // Handle login
      public function login(Request $request)
      {

          $request->validate([
              'email' => 'required|email',
              'password' => 'required|min:8',
          ]);


          if (Auth::attempt($request->only('email', 'password'))) {
              $request->session()->regenerate();
              $user = Auth::user();
          }else{
            return back()->withErrors(['notUser'=> 'Please check the user information; it appears to be incorrect.']);
          }


        // $remember = $request->has('remember') ? true : false;
        //   if ($remember) {
        //     config(['session.lifetime' => 43200]); // 30 days
        // } else {
        //     config(['session.lifetime' => 120]); // 2 hours
        // }

        if ($request->has('remember')) {
            Session::put('remember_me', true);
            config(['session.lifetime' => 43200]); // 30 days
        } else {
            Session::put('remember_me', false);
            config(['session.lifetime' => 120]); // 2 hours
        }


          if ($user->role->id == '1') {
            return redirect()->route('admin_main');
        } else {
              return view('landing_pages.product-landing');
          }
      }


      // Show registration form
      public function showRegisterForm()
      {
          return view('auth.auth-register-basic');
      }

      // Handle registration
      public function register(Request $request)
      {

          $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:2|max:55',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|regex:/^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


          $user = User::create([
              'name' => $request->name,
              'email' => $request->email,
              'role_id' => 2,
              'password' => Hash::make($request->password),
              'date_created' => Carbon::now()->format('Y-m-d')
          ]);

          Auth::login($user);


          if ($user->role->id == '1') {
            return redirect()->route('admin_main');
        } else {
              return view('landing_pages.product-landing');
          }
      }

      // Handle logout
      public function logout(Request $request)
      {
          Auth::logout();
          $request->session()->invalidate();
          $request->session()->regenerateToken();
          return redirect()->route('show_login');
      }
}
