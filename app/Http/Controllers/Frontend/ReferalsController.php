<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

/**
 * WebmasterController
 * Реферальная программа для вебмастеров
 * 
 * @author root87x
 * @version 1.0.0
 */
class ReferalsController extends Controller
{
    public function show(Request $request)
    {
        $user = $request->user();
        if (!$user->hasRole(User::ROLE_WEBMASTER)) {
            return redirect('/');
        }

        $referrees = $user->referees()
                ->where('role', User::ROLE_USER)
                ->paginate($this->rowsPerPage);

        return view('frontend.pages.webmaster.show', [
            'user' => $user,
            'referrees' => $referrees,
        ]);
    }
}
