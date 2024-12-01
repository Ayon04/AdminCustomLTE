<?php
namespace App\Http\Controllers;
use App\Services\Models\UserService;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserStoreRequest;
use Illuminate\Support\Facades\DB;
//use \resources\views\auth\Layouts;
//use \resources\views;
use App\Http\Requests\UserUpdateRequest;


class UserController extends Controller
{
    public function store(
        UserStoreRequest $userInsertReq,
        UserService      $userService,
    )
    {

        try {

            //dd();
            $userData = $userInsertReq->validated();
            $user = $userService->store($userData);
            return redirect()->back()->with('added', "User Added");
        } catch (\Throwable $e) {

            return redirect()->back()->with('message_fail', "Failed Operation");
        }
    }

    public function ViewUser()
    {

        $users = User::all();

        return view('auth.Pages.admin-list', compact('users'));
    }


    public function destroyUser($id)
    {

        try {
            $user = User::findOrFail($id);

            return view('auth.Pages.delete-confirmation',compact('user'));
        }catch (\Throwable $e){


            return redirect()->back()->with('message_fail', "an error occur");
        }
    }


    public function destroy($id)
    {
        try{
            $student = User::destroy($id);
           // return redirect()->back()->with('deleted',"Data Deleted");
            //return view('auth.Pages.admin-list');
            return redirect()->route('list')->with('deleted',"Data Deleted");

        }

        catch(\Throwable $ex){

            return redirect()->back()->with('message_fail',"Operation failed");

        }
    }
    public function edit($id)
    {
        try{
            $user = User::findOrFail($id);
            return view('auth.Pages.admin-update',compact('user'));

        }
        catch(\Throwable $ex){

            return redirect()->back()->with('message_fail',"an error occur");

        }
    }
    public function update(
        UserUpdateRequest  $updateRequest,
        UserService  $userService,$id
    ){
        try{
            $student = $userService->update($id,$updateRequest->validated());

            return redirect()->back()->with('updated',"Successful update Operation");

        }
        catch(\Throwable $e){
            //dd($e->getMessage());
            return redirect()->back()->with('update_fail',"Failed update Operation");
        }

    }



}





