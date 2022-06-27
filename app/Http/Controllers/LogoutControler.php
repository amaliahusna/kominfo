<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{
    /**
     * Log out account user.
     *
     * @return \Illuminate\Routing\Redirector
     */
    public function perform()
    {
        $id = Auth::id();

        Session::flush();
        
        Auth::logout();

        $tgl = Date('Y-m-d H:i:s');


        \App\Models\LogUser::create(['user_id' => $id, 'waktu' => $tgl]);

        return redirect('login');
    }
}