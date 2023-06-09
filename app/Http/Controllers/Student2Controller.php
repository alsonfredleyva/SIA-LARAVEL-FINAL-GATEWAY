<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Services\User2Service;

Class Student2Controller extends Controller {
use ApiResponser;

public $user2Service;

public function
__construct(User2Service
$user2Service){
$this->user2Service =
$user2Service;
$this->middleware('auth:api',['except' => ['login']]);
}

public function getUsers()
{ 
}

public function index() 
{
    return $this->successResponse($this->user2Service->obtainUsers2());
    return $this->respondWithToken($token);
}

public function adduser2(Request $request)
{ 
    return $this->successResponse($this->user2Service->createUser2($request->all(),Response::HTTP_CREATED));
    return $this->respondWithToken($token);
}

public function show($id) //show id
{
    return $this->successResponse($this->user2Service->obtainUser2($id));
    return $this->respondWithToken($token);
}

public function update(Request $request,$id) //update
{
    return $this->successResponse($this->user2Service->editUser2($request->all(),$id));
    return $this->respondWithToken($token);
}

public function delete($id)
{
    return $this->successResponse($this->user2Service->deleteUser2($id));
    return $this->respondWithToken($token);
}

}