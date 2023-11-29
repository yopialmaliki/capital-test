<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Article;
use App\Models\Point;
use App\Models\PointHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{

    function index(Request $request, $slug=null) {

        $articles = Article::paginate(10);

        $recentPosts = Article::limit(3)->get();

        return view('front-end.article.index', compact('articles','recentPosts'));
    }

    public function read(Request $request, $slug) {

        $user = Auth::user();

        $article = Article::where('permalink', $slug)->first();
        $point   = Point::where('user_id', $user->id)->first();
        $pointHist = PointHistory::where(['article_id' => $article->id, 'user_id' => $user->id])->count();

        return view('front-end.article.read', compact('article', 'point', 'pointHist'));
    }

    function ajax(string $param, Request $request)
    {

        switch ($param) {

            case 'increase_point':

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

}
