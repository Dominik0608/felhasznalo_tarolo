<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

use App\Models\User;

class UserController extends Controller {
  public function index() {
    return view('user/index');
  }

  public function api() {
    $client = new Client([
      'base_uri' => 'https://randomuser.me/api/',
      'timeout'  => 10.0,
    ]);
    $response = $client->request('GET', '?results=10&inc=name,dob,gender,location,email,login,picture', ['verify' => false]);
    $json = json_decode($response->getBody()->getContents());
    
    $this->saveUsers($json->results);

    return response('Successful saving', 200);
  }

  private function saveUsers($users) {
    foreach ($users as $user) {
      $newuser = new User;
      $newuser->name = $user->name->first . ' ' . $user->name->last;
      $newuser->age = $user->dob->age;
      $newuser->gender = $user->gender;
      $newuser->city = $user->location->city;
      $newuser->country = $user->location->country;
      $newuser->email = $user->email;
      $newuser->salt = $user->login->salt;
      $newuser->password = $user->login->sha256;
      $newuser->picture = $user->picture->large;
      $newuser->save();
    }
  }
}
