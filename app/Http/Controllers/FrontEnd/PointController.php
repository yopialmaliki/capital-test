<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Article;
use App\Models\Point;
use App\Models\PointHistory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class PointController extends Controller
{

    function index(Request $request, $slug=null) {

        $articles = Article::paginate(10);

        $recentPosts = Article::limit(3)->get();

        return view('front-end.article.index', compact('articles','recentPosts','slug'));
    }

    function show() {

        $user = Auth::user();

        $point   = Point::where('user_id', $user->id)->first();

        return view('front-end.point.reedem', compact('point'));
    }

    function category(Request $request, $slug) {

        return $this->index($request, $slug);
    }


    public function read(Request $request, $slug) {

        $user = Auth::user();

        $article = Article::where('permalink', $slug)->first();
        $point   = Point::where('user_id', $user->id)->first()->point;
        $pointHist = PointHistory::where(['article_id' => $article->id, 'user_id' => $user->id])->count();

        return view('front-end.article.read', compact('article', 'point', 'pointHist'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        try {
            DB::beginTransaction();

            $nilai_point   = intval($request->nilai_point);
            $point_convert = $this->getDecimalMaks($request->convert_point);

            if($point_convert < 100000){
                throw new Exception("Reedem Point minimal Rp. 100.000,00");
            }

            $user = Auth::user();

            $model = new PointHistory();

            $model->point_id = $id;
            $model->point    = intval($request->nilai_point);
            $model->user_id  = $user->id;
            $model->type     = 'decrease';

            $model->save();

            //* Update Point

            $updatePoint = Point::where('id', $id)
                            ->update([
                                'point'          => DB::raw('point -'.$nilai_point),
                                'point_convert'  => DB::raw('point_convert +'.$nilai_point),
                                'convert_amount' => DB::raw('convert_amount +'.$point_convert)
                            ]);

            $status  = 'success';
            $message = "Save Successfully";
            $route = redirect(route('public.profile'));

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

    function ajax(string $param, Request $request)
    {

        switch ($param) {

            case 'convert_point':

                $user = Auth::user();

                $queryPoint  = Point::where('user_id', $user->id);
                
                $getPoint    = $queryPoint->first();
                $UpdatePoint = $queryPoint->increment('point', 20);

                $PointHist = new PointHistory();
                $PointHist->point_id    = $getPoint->id;
                $PointHist->user_id     = $getPoint->user_id;
                $PointHist->point       = 20;
                $PointHist->type        = 'increase';
                $PointHist->article_id  = $request->id;

                $PointHist->save();

                return response()->json([
                    'status'  => 'success',
                    'message' => 'Berhasil mendapatkan 20 Point.',
                    'data'    => $queryPoint->first()
                ]);
                
                break;
        }
    }

    function getDecimalMaks($string) {
        try {
            if ($string == '' || $string == '0') $string = '0.00';
            $string_x 		= explode(',',$string);
        
            $string_a 		= str_replace('.', '', $string_x[0]);
            $string 			= $string_a . '.' . $string_x[1];
        
        } catch (\Throwable $th) {
            if ($string == '') $string = '0.00';
        }
        return $string;
    }
    

}
