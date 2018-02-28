<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterConfirmationController extends Controller
{
    public function index(){
        $user = User::where('confirmation_token', request('token'))->first();
        if (! $user) {
            return redirect(route('the_contest'))->with('flash', 'Unknown token.');
        }
        $user->confirm();
        return redirect(route('the_contest'))
            ->with('flash', 'Your account is now confirmed! You may post to the forum.');
    }
}
