<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sonata\GoogleAuthenticator\GoogleAuthenticator;

class GoogleAuthenticatorController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function connect(Request $request)
    {
        $user = auth()->user();

        $secret = session()->get('ga_secret');

        $ga = new GoogleAuthenticator();

        $code = $ga->getCode($secret);

        if($code != $request->get('code')) {
            return back()->with('ga_error', true);
        }

        if($user->ga_secret) {
            $user->update(['ga_secret' => null]);
        } else {
            $user->update(['ga_secret' => $secret]);
        }

        return back();
    }
}
