<?php

namespace WebCourse\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use WebCourse\Events\RegistrationEvent;
use WebCourse\Http\Requests\RegistrationRequest;
use WebCourse\Models\User;

class RegistrationController extends Controller
{


    public function create(RegistrationRequest $request) {
    	$data = $request->all();

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        event(new RegistrationEvent($user));
    }


}
