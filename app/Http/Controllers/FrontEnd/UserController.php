<?php
namespace App\Http\Controllers\FrontEnd;

use App\Models\Member;
use App\Models\Point;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller {



    function profile() {

        $user = Auth::user();

        $member = Member::where('user_id', $user->id)->first();
        $point  = Point::where('user_id', $user->id)->first();

        return view('front-end.user.profile', compact('member','point'));
    }

    function logout() {

        Auth::logout();

        return redirect(route('public.login'));
    }

}
