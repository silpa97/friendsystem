<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\profile;
use Session;
class AuthController extends Controller
{
    public function login()
    {
      return view("auth.login");
    }
    public function registration()
    {
         return view ("auth.registration");
       
    }
    public function registerUser(Request $request)
    {
      $request->validate([
        'username' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:5|max:12'
      ]);
      $user = new User();
      $user->name = $request->username;
      $user->email = $request->email;
      $user->password = $request->password;
      $res = $user->save();
    }
    public function timeline()
    {
      return view("auth.timeline");
    }
    public function updatetimeline(Request $request)
    {
      $profile = new profile();
      $profile->name = $request->gender;
      $profile->email = $request->dob;
      $res = $profile->save();
    }
    public function about(Request $request)
    {
      $request->session()->put('data',$request->input());
      // return $request->session()->get('data',$request->input());
      return view("auth.profile");
      return $request->input();
    }
    public function addFriend($username)
    {
      $usercount = User::where('username',$username)->count();
      if($usercount>0){
        $user_id = Auth::user()->id;
        $friend_id = User::getUserId($username);
        $friend = new Friend;
        $friend->from_id = $user_id;
        $friend->to_id = $friend_id;
        $friend->save();
      }
    }
    public function viewothers()
    {
      $notfriend=User::where('id','!=',Auth::user()->id);
      $notfriend=$notfriend->get();
      return $notfriend;
       return view('auth.viewuser');
    }
}
