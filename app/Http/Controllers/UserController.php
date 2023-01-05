<?php

namespace App\Http\Controllers;

use App\Repositories\Repository\Models\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private UserRepository $userrepository;

    public function __construct(UserRepository $userrepository)
    {
        $this->userrepository = $userrepository;
    }

    public function create(Request $request){
       return $this->userrepository->create($request);
    }

    public function update(Request $request){
        return $this->userrepository->update($request);
    }

    public function delete($id){
        return $this->userrepository->delete($id);
    }

    public function find($id){
        return $this->userrepository->find($id);
    }

    public function allUsers(){
        return $this->userrepository->get();
    }
}
