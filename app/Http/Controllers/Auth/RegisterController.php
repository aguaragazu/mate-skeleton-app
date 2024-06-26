<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Mate\Http\Controller;
use Mate\Crypto\Hasher;
use Mate\Http\Request;

/**
 * Register controller.
 */
class RegisterController extends Controller {
    /**
     * Register page.
     */
    public function show() {
        return view("auth/register");
    }

    /**
     * Register new user.
     */
    public function create(Request $request, Hasher $hasher) {
        $data = $request->validate([
            "name" => "required",
            "email" => "email",
            "password" => "required",
            "confirmPassword" => "required",
        ]);

        if ($data["confirmPassword"] !== $data["password"]) {
            return back()->withErrors(["confirmPassword" => ["Passwords do not match"]]);
        }

        $data["password"] = $hasher->hash($data["password"]);

        $user = User::create($data);
        
        $user->login();

        return redirect("/home");
    }
}
