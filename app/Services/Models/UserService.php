<?php
namespace App\Services\Models;
use App\Models\User;
use App\Http\Requests\UserStoreRequest;

class UserService{

public function store(array $payloads)
{    

    return User::query()->create($payloads);
   
}

// public function update($id, array $payloads)
// {
//     $student = Student::findOrFail($id); 
//     $student->update($payloads);
//     return $student;
// }

public function ViewUsers()
{
    
   // $students = Student::all();
    
     $users = User::all();
}

}

?>

