<?php
namespace App\Services;

use App\Traits\ConsumesExternalService;

class User2Service{

use ConsumesExternalService;

/**
* The base uri to consume the User2 Service
* @var string
*/
public $baseUri;
public $secret;

public function __construct()
{
$this->baseUri = config('services.users2.base_uri');
$this->secret = config('services.users2.secret');
}


public function obtainUsers2()
{
return $this->performRequest('GET','/users');
}

public function createUser2($data)
{
return $this->performRequest('POST','/ausers',$data);
}

public function obtainUser2($id)
{
return $this->performRequest('GET', "/gusers/{$id}");
}

public function editUser2($data, $id)
{
return $this->performRequest('PUT',"/uusers/{$id}", $data);
}

public function deleteUser2($id)
{
return $this->performRequest('DELETE', "/dusers/{$id}");
}


}