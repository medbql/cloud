<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Str;

class RegisteredUserController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): Response
    {


        $request->validate([
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email','unique:'.User::class, 'max:255', 'unique:'.Admin::class ],
            'password' => ['required', Rules\Password::defaults()],
            'post' => [
                'required',
                'string',
                'in:Technicien de maintenance,Chef équipe,Superviseur,Manager'
            ],
        ]);

        if ($request->post === 'Manager' ) {
            $user = Admin::create([
                'firstName' => $request->firstName,
                'lastName' => $request->lastName,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'post' => $request->post,
                'remember_token' => Str::random(10),
                'email_verified_at' => now(),
            ]);
        }else {
            $user = User::create([
                'firstName' => $request->firstName,
                'lastName' => $request->lastName,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'post' => $request->post,
                'remember_token' => Str::random(10),
                'email_verified_at' => now(),
            ]);
        }


        // event(new Registered($user));


        return response()->noContent();
    }
}
