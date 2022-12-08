<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
   public function UsersView(){
    $data['allData'] = User::all();
    return view('backend.users.view_users', $data);
   }

   public function UsersAdd(){
      return view('backend.users.add_user');
   }

   public function UsersStore(Request $request){
$validatedData = $request->validate([
'username' => 'required',
'email' => 'required|unique:users',
]);
$data = new User();
$data->usertype=$request->usertype;
$data->name=$request->username;
$data->email=$request->email;
$data->password = bcrypt($request->password);
$data->save();

$notification = array(
   'message' => 'User Inserted Successfully',
   'alert-type'=> 'success'
);

return redirect()->route('users.view')->with($notification);
   }


   public function UserEdit($id){
      $editData=User::find($id);
      return view('backend.users.edit_user',compact('editData'));
   }

   public function UserUpdate(Request $request, $id){
      $data = User::find($id);
      $data->usertype=$request->usertype;
      $data->name=$request->username;
      $data->email=$request->email;
      $data->save();
      
      $notification = array(
         'message' => 'User Updated Successfully',
         'alert-type'=> 'success'
      );
      
      return redirect()->route('users.view')->with($notification);
   }

   public function UserDelete($id){
 $user = User::find($id);
 $user->delete();
 $notification = array(
   'message' => 'User Deleted Successfully',
   'alert-type'=> 'info'
);

return redirect()->route('users.view')->with($notification);
   }
}
