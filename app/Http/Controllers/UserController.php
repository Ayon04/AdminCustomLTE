<?php
namespace App\Http\Controllers;
use App\Services\Models\UserService;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use Illuminate\Support\Facades\DB;
use \resources\views;

class UserController extends Controller
{ 
      public function store( 
        UserStoreRequest $userInsertReq,
          UserService $userService,
      ){

        try{

          //dd();
            $userData = $userInsertReq->validated();
            $user = $userService->store($userData);
            return redirect()->back()->with('added', "User Added");
        }
        catch(\Throwable $e){

            return redirect()->back()->with('message_fail',"Failed Operation");
        }
    }

        public function ViewStudent(){
             
              $students = User::all();
              
              return view('user-list',compact('users'));
          }


}
