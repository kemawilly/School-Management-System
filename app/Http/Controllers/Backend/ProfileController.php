<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
  public function ProfileView(){
    $id = Auth::user()->id;
    $user=User::find($id);
    return view('backend.users.view_profile', compact('user'));
  }

  public function ProfileEdit(){
    $id = Auth::user()->id;
    $editData=User::find($id);
    return view('backend.users.edit_profile', compact('editData'));
  }

  public function ProfileStore(Request $request){
    $data = User::find(Auth::user()->id);
    $data->name = $request->username;
    $data->email = $request->email;
    $data->mobile = $request->mobile;
    $data->address = $request->address;
    $data->gender = $request->gender;
   // $data->status = $request->name;
   if($request->file('image')){
    $file = $request->file('image');
    @unlink(public_path('upload/users_images/'.$data->image));
    $filename=date('YmdHi').$file->getClientOriginalName();
    $file->move(public_path('upload/users_images'),$filename);
    $data['image']=$filename;
   }
   $data->save();
   
$notification = array(
  'message' => 'User profile updated Successfully',
  'alert-type'=> 'success'
);

return redirect()->route('profile.view')->with($notification);
 
  }

  public function PasswordView(){
    return view('backend.users.edit_password');
  }

  public function PasswordUpdate(Request $request){
    $validatedData = $request->validate([
      'oldpassword' => 'required',
      'password' => 'required|confirmed',
      ]);
   
      $hashedPassword = Auth::user()->password;

      if(Hash::check($request->oldpassword, $hashedPassword)){
        $user = User::find(Auth::id());
        $user->password = Hash::make($request->password);
        $user->save();
        Auth::logout();
        return redirect()->route('login');
      }else{
        return redirect()->back();
      }
  }
}
