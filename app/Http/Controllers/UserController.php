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

        $user = User::findOrFail($id);

        return view('auth.Pages.delete-confirmation',compact('user'));
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

}





