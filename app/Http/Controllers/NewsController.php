<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;

// 追記
use App\News;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $posts = News::all()->sortByDesc('updated_at');

        // news/index.blade.php ファイルを渡している
        // また View テンプレートに posts、という変数を渡している
        return view('news.index', ['posts' => $posts]);
    }
}