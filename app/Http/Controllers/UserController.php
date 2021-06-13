<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function get(Request $request){
        $response = $request->user();
        return response($response, 200);
    }

    public function update(Request $request){
        $fields = [];
        if($request->has('email')){
            $fields = $request->validate([
                'email' => 'required|string|email',
            ]);
        }
        $user = User::find($request->user()->id);
        $user->name = $request->input('name', $request->user()->name);
        if(isset($fields['email']) && $fields['email'] !== $request->user()->email){
            $user->email = $fields['email'];
        }
        $user->save();
        $response = [
            'message' => 'User details have been updated.'
        ];
        return response($response, 200);
    }

    public function delete(Request $request){
        User::where('id', $request->user()->id)->delete();
        $response = [
            'message' => 'Your Account Details have been deleted.'
        ];
        return response($response, 200);
    }
}