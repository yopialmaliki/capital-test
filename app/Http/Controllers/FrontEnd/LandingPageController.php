<?php
namespace App\Http\Controllers\FrontEnd;

use App\Models\Member;
use App\Models\Point;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class LandingPageController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {

        return view('front-end.landing-page.index');
    }

    public function login() {
        return view('front-end.auth.login');
    }

    public function register() {
        return view('front-end.auth.register');
    }

    public function store(User $model, Request $request)
    {
        // dd($request->all());
        try {
            DB::beginTransaction();

            $user = User::where('username', $request->username)->first();

            if($user){
                throw new Exception("Username atau no telepon sudah terdaftar");
            }

            $model->name         = $request->name;
            $model->username         = $request->username;
            $model->email          = $request->email;
            $model->password    = bcrypt($request->password);

            $model->save();

            $member = new Member();
            $member->name = $request->name;
            $member->gender = $request->gender;
            $member->identity_number = $request->identity_number;
            $member->phone_number = $request->phone_number;
            $member->email = $request->email;
            $member->city = $request->city;
            $member->refferal_code = $request->refferal_code;
            $member->user_id = $model->id;

            $member->save();

            $point = new Point();
            $point->user_id = $model->id;

            $point->save();

            $status  = 'success';
            $message = "Save Successfully";
            $route = redirect(route('public.login'));

            DB::commit();
        } catch (\Exception $er) {
            DB::rollBack();

            $status  = 'danger';
            $message = $er->getMessage();
            $route = Redirect::back();
        }

        if ($request->get('format') == 'json') {
            $response = [
                'status' => $status,
                'message' => $message,
            ];

            return response()->json($response);
        }

        return $route->with('status', $status)->with('message', $message);

    }
}
