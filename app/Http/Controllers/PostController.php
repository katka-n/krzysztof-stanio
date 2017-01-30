<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCommentRequest;
use App\Post;
use App\Graduates;
use App\Categories;
use App\Comments;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Session;


class PostController extends Controller
{

    //wyswietlanie 3 artykulow z bloga na stronie glownej (index)
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->take(3)->get();

        $all_graduates = DB::table('graduates')->pluck('id');
        $arr = array();
        for ($i = 1; $i <= count($all_graduates); $i++) {
            $arr[$i - 1] = $all_graduates[$i - 1];
        }
        shuffle($arr);
        $graduates = [];
        foreach ($arr as $key => $value) {
            $graduate = Graduates::where('id', $value)->first();
            array_push($graduates, $graduate);
        }
        shuffle($graduates);

        return view('index', ['posts' => $posts, 'graduates' => $graduates]);

    }

    // wyswietlanie artykulow na podstronie blog
    public function blog_index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(2);

        $categories = Categories::all();

        $postsByDates = DB::table('posts')
            ->select(DB::raw('count(id) as `data`'))
            ->select(DB::raw("DATE_FORMAT(created_at, '%m-%Y') new_date"))
            ->select(DB::raw('YEAR(created_at) year, MONTH(created_at) month'))
            ->groupBy('year', 'month')
            ->orderBy('year', 'desc')
            ->orderBy('month', 'desc')
            ->get();
        $postsByDates = json_decode($postsByDates, true);


        return view('blog', ['posts' => $posts, 'categories' => $categories,
            'postsByDates' => $postsByDates]);
    }

    //wyswietlanie notek po id
    public function byEntry($id)
    {
        $posts = Post::where('id', $id)->first();
        $categories = Categories::all();
        $comments = Comments::where('posts_id', $id)->get();

        $postsByDates = DB::table('posts')
            ->select(DB::raw('count(id) as `data`'))
            ->select(DB::raw("DATE_FORMAT(created_at, '%m-%Y') new_date"))
            ->select(DB::raw('YEAR(created_at) year, MONTH(created_at) month'))
            ->groupBy('year', 'month')
            ->orderBy('year', 'desc')
            ->orderBy('month', 'desc')
            ->get();
        $postsByDates = json_decode($postsByDates, true);

        $commentsNumber = DB::table('comments')
            ->where('posts_id', '=', $id)
            ->count();

        $fiveLastPosts = Post::orderBy('id', 'desc')->take(5)->get();


        return view('blog_notka', ['posts' => $posts, 'categories' => $categories,
            'comments' => $comments, 'postsByDates' => $postsByDates,
            'commentsNumber' => $commentsNumber,
            'fiveLastPosts' => $fiveLastPosts,
        ]);
    }

    //wyswietlanie notek po kategorii
    public function byCategory($name)
    {
        $categories = Categories::all();

        $post = DB::table('categories')
            ->where('name', '=', $name)
            ->leftJoin('posts', 'posts.category_id', '=', 'categories.id')
            ->get();
        $posts = json_decode($post, true);

        $postsByDates = DB::table('posts')
            ->select(DB::raw('count(id) as `data`'))
            ->select(DB::raw("DATE_FORMAT(created_at, '%m-%Y') new_date"))
            ->select(DB::raw('YEAR(created_at) year, MONTH(created_at) month'))
            ->groupBy('year', 'month')
            ->orderBy('year', 'desc')
            ->orderBy('month', 'desc')
            ->get();
        $postsByDates = json_decode($postsByDates, true);

        $fiveLastPosts = Post::orderBy('id', 'desc')->take(5)->get();


        return view('blog_kategoria', ['posts' => $posts,
            'categories' => $categories,
            'postsByDates' => $postsByDates,
            'fiveLastPosts' => $fiveLastPosts,
        ]);
    }

    //wyswietlanie notek po dacie
    public function byDate($year, $month)
    {
        $posts = Post::whereYear('created_at', '=', $year)
            ->whereMonth('created_at', '=', $month)
            ->orderBy('id', 'desc')
            ->get();

        $categories = Categories::all();

        $postsByDates = DB::table('posts')
            ->select(DB::raw('count(id) as `data`'))
            ->select(DB::raw("DATE_FORMAT(created_at, '%m-%Y') new_date"))
            ->select(DB::raw('YEAR(created_at) year, MONTH(created_at) month'))
            ->groupBy('year', 'month')
            ->orderBy('year', 'desc')
            ->orderBy('month', 'desc')
            ->get();
        $postsByDates = json_decode($postsByDates, true);

        $fiveLastPosts = Post::orderBy('id', 'desc')->take(5)->get();


        return view('blog_archiwum', ['posts' => $posts,
            'categories' => $categories,
            'postsByDates' => $postsByDates,
            'fiveLastPosts' => $fiveLastPosts,
        ]);
    }

    public function addcomments($id)
    {
        $categories = Categories::all();
        return view('addcomments', compact('categories', 'id'));

    }

    public function store(CreateCommentRequest $commentRequest)
    {
        $id = $commentRequest->input('post_id');
        $comment = new Comments();
        $comment->comment = $commentRequest->input('comment');
        $comment->nick = $commentRequest->input('nick');
        $comment->posts_id = $commentRequest->input('post_id');
        $comment->save();

        Session::flash('message', 'Komentarz czeka na publikację.');

        return redirect()->route('posts', compact('id'));


    }

}